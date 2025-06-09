import React, { useEffect, useState } from 'react';
import axios from 'axios';

const DashPage = () => {
    const [mainMenus, setMainMenus] = useState([]);
    const [subMenus, setSubMenus] = useState([]);
    const [selectedMainMenuId, setSelectedMainMenuId] = useState(null);
    const [selectedSubMenu, setSelectedSubMenu] = useState(null);

    useEffect(() => {
        // MainMenu データ取得
        axios.get('/api/main-menu', { params: { login_user_id: 'C001' } })
            .then(res => {
                setMainMenus(res.data);
                if (res.data.length > 0) {
                    setSelectedMainMenuId(res.data[0].MENUID);
                }
            });

        // SubMenu データ取得
        axios.get('/api/sub-menu', { params: { login_user_id: 'C001' } })
            .then(res => {
                setSubMenus(res.data);
            });
    }, []);

    // 現在選択中の MainMenu に対応する SubMenu をフィルター
    const filteredSubMenus = subMenus.filter(submenu => submenu.MENUID === selectedMainMenuId);

    // Logout 処理
    const handleLogout = async () => {
        try {
            await axios.post('/logout');
            // ログアウト成功後、ログイン画面へリダイレクト
            window.location.href = '/login';
        } catch (error) {
            console.error('Logout エラー:', error);
        }
    };

    return (
        <div style={{ display: 'flex', height: '100vh' }}>
            {/* 左側：MainMenu 一覧 */}
            <div style={{
                width: '200px',
                borderRight: '1px solid #ccc',
                display: 'flex',
                flexDirection: 'column',
                justifyContent: 'space-between' // 上部メニュー + 下部Logout ボタン
            }}>
                {/* 上部メニュー */}
                <div style={{ padding: '10px' }}>
                    <h3>Main Menu</h3>
                    {mainMenus.map(menu => (
                        <button
                            key={menu.MENUID}
                            style={{
                                display: 'block',
                                width: '100%',
                                padding: '10px',
                                marginBottom: '5px',
                                backgroundColor: menu.COLORCHANGEFLG === '1' 
                                    ? ' #dc3545' 
                                    : (selectedMainMenuId === menu.MENUID ? ' #007bff' : ' #f0f0f0'),
                                color: selectedMainMenuId === menu.MENUID ? '#fff' : '#000',
                                border: 'none',
                                cursor: 'pointer',
                                textAlign: 'left'
                            }}
                            onClick={() => {
                                setSelectedMainMenuId(menu.MENUID);
                                setSelectedSubMenu(null);
                            }}
                        >
                            {menu.MENUNAME}
                        </button>
                    ))}
                </div>

                {/* 下部：Logout ボタン */}
                <div style={{ padding: '10px', borderTop: '1px solid #ccc' }}>
                    <button
                        onClick={handleLogout}
                        style={{
                            width: '100%',
                            padding: '10px',
                            backgroundColor: ' #00008B',
                            color: '#fff',
                            border: 'none',
                            cursor: 'pointer'
                        }}
                    >
                        ログアウト
                    </button>
                </div>
            </div>

            {/* 右側：SubMenu + 内容表示 */}
            <div style={{ flex: 1, display: 'flex', flexDirection: 'column' }}>
                {/* 上部：SubMenu 一覧 */}
                <div style={{ borderBottom: '1px solid #ccc', padding: '10px', backgroundColor: '#f9f9f9' }}>
                    <h4>Sub Menu (MainMenu ID = {selectedMainMenuId})</h4>
                    <div style={{ display: 'flex', flexWrap: 'wrap' }}>
                        {filteredSubMenus.map(submenu => (
                            <button
                                key={submenu.SUBMENUID}
                                style={{
                                    padding: '8px 12px',
                                    margin: '5px',
                                    backgroundColor: selectedSubMenu?.SUBMENUID === submenu.SUBMENUID && selectedSubMenu?.MENUID === submenu.MENUID
                                        ? '#28a745' : '#e0e0e0',
                                    color: selectedSubMenu?.SUBMENUID === submenu.SUBMENUID && selectedSubMenu?.MENUID === submenu.MENUID
                                        ? '#fff' : '#000',
                                    border: '1px solid #ccc',
                                    borderRadius: '4px',
                                    cursor: 'pointer'
                                }}
                                onClick={() => setSelectedSubMenu(submenu)}
                            >
                                {submenu.SUBMENUNAME}
                            </button>
                        ))}
                    </div>
                </div>

                {/* 下部：内容表示エリア */}
                <div style={{ flex: 1, padding: '20px' }}>
                    <h4>内容表示エリア</h4>
                    {selectedSubMenu ? (
                        <p>
                            <strong>Main Menu:</strong> {mainMenus.find(menu => menu.MENUID === selectedMainMenuId)?.MENUNAME} <br />
                            <strong>Sub Menu:</strong> {selectedSubMenu.SUBMENUNAME}
                        </p>
                    ) : (
                        <p>（Main Menu または Sub Menu を選択してください）</p>
                    )}
                </div>
            </div>
        </div>
    );
};

export default DashPage;