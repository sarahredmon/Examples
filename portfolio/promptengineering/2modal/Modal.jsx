
import React, { useState } from 'react';
// import './Modal.css'; // Importing the external stylesheet

function Modal() {
  const [isOpen, setIsOpen] = useState(false);

  const toggleModal = () => {
    setIsOpen(!isOpen);
  };

  return (
    <div>
      <button onClick={toggleModal}>Toggle Modal</button>
      
      {isOpen && (
        <div className="modalOverlay">
          <div className="modalContent">
            <h2>Modal Title</h2>
            <p>This is the modal content.</p>
            <button onClick={toggleModal}>Close</button>
          </div>
        </div>
      )}
    </div>
  );
}

export default Modal;