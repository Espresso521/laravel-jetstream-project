const CommonSubPage = ({ mainmenu = 'Main Menu Value', submenu = 'Sub Menu Value' }) => {
  return (
    <div>
      <div className="mb-4">
        <span className="text-white whitespace-nowrap">選んだメインマーニューは：</span>
        <h3 className="text-white inline ml-2">{mainmenu}</h3>
      </div>
      <div className="mb-4">
        <span className="text-white whitespace-nowrap">選んだサブマーニューは：</span>
        <h4 className="text-white inline ml-2">{submenu}</h4>
      </div>
      {/* write code here */}
    </div>
  );
};

export default CommonSubPage;
