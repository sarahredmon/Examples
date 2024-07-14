// LightDarkModeToggle.js
import React, { useState, useEffect } from 'react';

const LightDarkModeToggle = () => {
  const [isDarkMode, setIsDarkMode] = useState(false);

  useEffect(() => {
    // Apply dark mode styles when isDarkMode changes
    document.body.classList.toggle('dark-mode', isDarkMode);
  }, [isDarkMode]);

  const toggleMode = () => {
    setIsDarkMode(!isDarkMode);
  };

  return (
    <div className="mode-toggle">
      <label>
        <input type="checkbox" checked={isDarkMode} onChange={toggleMode} />
        Dark Mode
      </label>
    </div>
  );
};

export default LightDarkModeToggle;