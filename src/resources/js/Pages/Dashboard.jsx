import {
  AdjustmentsHorizontalIcon,
  ChartBarIcon,
  ClipboardIcon,
  CogIcon,
  CreditCardIcon,
  DocumentIcon,
  HomeIcon,
  UserIcon,
  UsersIcon,
} from '@heroicons/react/24/solid';
import { usePage } from '@inertiajs/react';
import axios from 'axios';
import { useEffect, useState } from 'react';
import pageComponentMap from './SubMenuMap';

const iconMap = {
  1: HomeIcon,
  2: UsersIcon,
  3: ClipboardIcon,
  4: CreditCardIcon,
  5: ChartBarIcon,
  6: DocumentIcon,
  7: CogIcon,
  8: AdjustmentsHorizontalIcon,
};

const Dashboard = () => {
  const [mainMenus, setMainMenus] = useState([]);
  const [subMenus, setSubMenus] = useState([]);
  const [selectedMainMenuId, setSelectedMainMenuId] = useState(null);
  const [selectedSubMenu, setSelectedSubMenu] = useState(null);
  const { login_user_id, user_name } = usePage().props;
  const SelectedPage = pageComponentMap[selectedMainMenuId]?.[selectedSubMenu?.SUBMENUID];

  useEffect(() => {
    console.log('ログインユーザーID:', login_user_id);
    console.log('ユーザー名:', user_name);
    axios.get('/api/main-menu', { params: { login_user_id: login_user_id } }).then(res => {
      setMainMenus(res.data);
      if (res.data.length > 0) setSelectedMainMenuId(res.data[0].MENUID);
    });
    axios
      .get('/api/sub-menu', { params: { login_user_id: login_user_id } })
      .then(res => setSubMenus(res.data));
  }, []);

  const filteredSubMenus = subMenus.filter(s => s.MENUID === selectedMainMenuId);

  const handleLogout = async () => {
    try {
      await axios.post('/logout');
      window.location.href = '/login';
    } catch (error) {
      console.error('Logout エラー:', error);
    }
  };

  return (
    <div className="flex flex-col h-screen bg-gray-100">
      <div className="bg-black text-white flex items-center justify-between px-6 py-3">
        <div className="text-lg font-bold">特定健診・特定保険指導システム</div>
        <div className="flex items-center gap-2">
          <UserIcon className="h-5 w-5 text-white" />
          <span className="text-sm">{user_name}</span>
        </div>
      </div>

      <div className="flex flex-1 overflow-hidden">
        <div className="w-75 bg-gray-800 text-white p-2 flex flex-col">
          {mainMenus.map(menu => {
            const Icon = iconMap[menu.MENUID];
            return (
              <button
                key={menu.MENUID}
                onClick={() => {
                  setSelectedMainMenuId(menu.MENUID);
                  setSelectedSubMenu(null);
                }}
                className={`w-full flex items-start px-4 py-2 mb-1 rounded ${
                  selectedMainMenuId === menu.MENUID
                    ? 'bg-blue-600 text-white'
                    : 'hover:bg-gray-700 text-white'
                }`}
              >
                {Icon && <Icon className="h-5 w-5 flex-shrink-0" />}
                <div className="ml-2 text-sm whitespace-normal break-words leading-tight">
                  {menu.MENUNAME}
                </div>
              </button>
            );
          })}
          <button
            onClick={handleLogout}
            className="mt-auto px-4 py-2 bg-blue-700 hover:bg-blue-800 text-white rounded"
          >
            ログアウト
          </button>
        </div>

        <div className="flex-1 flex flex-col overflow-auto">
          <div className="p-4 bg-white border-b">
            <div className="mb-2 text-sm text-gray-600">
              {mainMenus.find(m => m.MENUID === selectedMainMenuId)?.MENUNAME}
              {selectedSubMenu ? ` > ${selectedSubMenu.SUBMENUNAME}` : ''}
            </div>
            <div className="flex flex-wrap gap-2">
              {filteredSubMenus.map(sub => (
                <button
                  key={sub.SUBMENUID}
                  onClick={() => setSelectedSubMenu(sub)}
                  className={`rounded-full px-4 py-1 border ${
                    selectedSubMenu?.SUBMENUID === sub.SUBMENUID
                      ? 'bg-green-500 text-white'
                      : 'bg-gray-200'
                  }`}
                >
                  {sub.SUBMENUNAME}
                </button>
              ))}
            </div>
          </div>

          <div className="flex-1 bg-gray-800 text-white p-2 rounded shadow">
            {SelectedPage ? (
              <SelectedPage
                mainmenu={mainMenus.find(m => m.MENUID === selectedMainMenuId)?.MENUNAME}
                submenu={selectedSubMenu.SUBMENUNAME}
              />
            ) : (
              <p>メニューを選択してください。</p>
            )}
          </div>
        </div>
      </div>
    </div>
  );
};

export default Dashboard;
