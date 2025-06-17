import { useState } from 'react';

const CheckboxSection = () => {
  const [isKenshinChecked, setIsKenshinChecked] = useState(false);
  const [isContractKenshinChecked, setIsContractKenshinChecked] = useState(true);
  const [isShidouChecked, setIsShidouChecked] = useState(false);
  const [isContractShidouChecked, setIsContractShidouChecked] = useState(true);

  return (
    <div className="flex gap-4">
      {/* 健診機関 */}
      <div className="bg-white rounded p-4 text-black w-1/2">
        <h3 className="text-base font-bold mb-4 border-l-4 border-green-500 pl-2">健診機関設定</h3>
        <div className="flex items-center gap-2 mb-2">
          <input
            type="checkbox"
            id="kenshin"
            checked={isKenshinChecked}
            onChange={e => setIsKenshinChecked(e.target.checked)}
          />
          <label
            htmlFor="kenshin"
            className={`${isKenshinChecked ? 'text-green-600 font-semibold' : 'text-black'}`}
          >
            健診機関として登録
          </label>
        </div>
        <div className="flex items-center gap-2">
          <input
            type="checkbox"
            id="contractKenshin"
            checked={isContractKenshinChecked}
            onChange={e => setIsContractKenshinChecked(e.target.checked)}
            className="accent-green-600"
          />
          <label
            htmlFor="contractKenshin"
            className={`${
              isContractKenshinChecked ? 'text-green-600 font-semibold' : 'text-black'
            }`}
          >
            契約健診機関として登録
          </label>
        </div>
      </div>

      {/* 保険指導機関 */}
      <div className="bg-white rounded p-4 text-black w-1/2">
        <h3 className="text-base font-bold mb-4 border-l-4 border-green-500 pl-2">
          保険指導機関設定
        </h3>
        <div className="flex items-center gap-2 mb-2">
          <input
            type="checkbox"
            id="shidou"
            checked={isShidouChecked}
            onChange={e => setIsShidouChecked(e.target.checked)}
          />
          <label
            htmlFor="shidou"
            className={`${isShidouChecked ? 'text-green-600 font-semibold' : 'text-black'}`}
          >
            保険指導機関として登録
          </label>
        </div>
        <div className="flex items-center gap-2">
          <input
            type="checkbox"
            id="contractShidou"
            checked={isContractShidouChecked}
            onChange={e => setIsContractShidouChecked(e.target.checked)}
            className="accent-green-600"
          />
          <label
            htmlFor="contractShidou"
            className={`${isContractShidouChecked ? 'text-green-600 font-semibold' : 'text-black'}`}
          >
            契約保険指導機関として登録
          </label>
        </div>
      </div>
    </div>
  );
};

export default CheckboxSection;
