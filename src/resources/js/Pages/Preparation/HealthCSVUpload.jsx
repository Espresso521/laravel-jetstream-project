import { useState } from 'react';

const HealthCsvUpload = () => {
  const [category, setCategory] = useState('特定健診');
  const [fileName, setFileName] = useState('');

  const handleFileChange = e => {
    const file = e.target.files?.[0];
    if (file) {
      setFileName(file.name);
    }
  };

  return (
    <div className="mt-6 bg-white border border-dashed border-gray-400 p-6 rounded shadow text-black">
      <h3 className="text-md font-bold mb-4">健診データ取込 (CSV)</h3>

      <div className="flex items-center gap-6 mb-4">
        <label className="flex items-center gap-1">
          <input
            type="radio"
            name="category"
            value="特定健診"
            checked={category === '特定健診'}
            onChange={e => setCategory(e.target.value)}
          />
          特定健診
        </label>
        <label className="flex items-center gap-1">
          <input
            type="radio"
            name="category"
            value="特定健診以外"
            checked={category === '特定健診以外'}
            onChange={e => setCategory(e.target.value)}
          />
          特定健診以外
        </label>
      </div>

      <div className="border-2 border-dashed border-blue-400 rounded p-6 text-center bg-gray-50">
        <label
          htmlFor="file-upload"
          className="cursor-pointer inline-block bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600"
        >
          ファイルを選択
        </label>
        <input
          id="file-upload"
          type="file"
          accept=".csv"
          className="hidden"
          onChange={handleFileChange}
        />
        {fileName && <p className="mt-2 text-sm">{fileName} を選択しました。</p>}
        <p className="text-sm text-gray-600 mt-2">または、ここにファイルをドラッグ＆ドロップ</p>
      </div>
    </div>
  );
};

export default HealthCsvUpload;
