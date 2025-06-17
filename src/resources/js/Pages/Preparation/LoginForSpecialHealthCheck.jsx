import CheckboxSection from './SettingCheckBox';

const LoginForSpecailHealthCheck = () => {
  return (
    <div className="bg-gray-700 p-5 rounded text-white h-full">
      <h2 className="text-lg font-bold mb-3 border-l-4 border-green-500 pl-2">
        健診・保険指導機関明細入力
      </h2>

      <div className="grid grid-cols-2 gap-6 bg-gray-100 p-6 rounded text-black">
        <div className="space-y-4">
          <div className="flex items-center gap-2">
            <label className="w-24">機関コード</label>
            <input className="flex-0 border rounded px-2 py-1" />
            <div className="ml-5">
              <label className="w-24">都道府県</label>
              <select className="ml-2 border rounded px-2 py-1 min-w-[120px]">
                <option>-</option>
                <option>東京都</option>
                <option>大阪府</option>
                <option>北海道</option>
              </select>
            </div>
          </div>
          <div>
            <label>フリガナ</label>
            <input className="w-full border rounded px-2 py-1 mt-1" />
          </div>
          <div>
            <label>機関名</label>
            <input className="w-full border rounded px-2 py-1 mt-1" />
          </div>
          <div>
            <label>略称</label>
            <input className="w-full border rounded px-2 py-1 mt-1" />
          </div>
        </div>

        <div className="space-y-4">
          <div>
            <label>郵便番号</label>
            <input className="w-full border rounded px-2 py-1 mt-1" />
          </div>
          <div>
            <label>フリガナ</label>
            <input className="w-full border rounded px-2 py-1 mt-1" />
          </div>
          <div>
            <label>所在地</label>
            <input className="w-full border rounded px-2 py-1 mt-1" />
          </div>
          <div className="flex gap-2">
            <div className="flex-1">
              <label>電話番号</label>
              <input className="w-full border rounded px-2 py-1 mt-1" />
            </div>
            <div className="flex-1">
              <label>FAX番号</label>
              <input className="w-full border rounded px-2 py-1 mt-1" />
            </div>
          </div>
          <div className="flex gap-2">
            <div className="flex-1">
              <label>収容人数</label>
              <input className="w-full border rounded px-2 py-1 mt-1" />
            </div>
            <div className="flex-1">
              <label>URL</label>
              <input className="w-full border rounded px-2 py-1 mt-1" />
            </div>
          </div>
        </div>
      </div>

      <div className="grid grid-cols-2 gap-4 mt-6">
        <CheckboxSection />
      </div>

      <div className="mt-6 text-center">
        <button className="bg-black text-white px-6 py-2 rounded-full hover:bg-gray-900">
          更新
        </button>
      </div>
    </div>
  );
};

export default LoginForSpecailHealthCheck;
