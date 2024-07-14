/* https://developer.mozilla.org/en-US/docs/Web/API/HTMLDialogElement/close */


function sevenFun() {
  const addButton = document.getElementById("add7");
  const closeButton = document.getElementById("close7");
  const dialog = document.getElementById("favDialog7");

  function openCheck(dialog) {
    if (dialog.open) {
      console.log("Dialog open");
    } else {
      console.log("Dialog closed");
    }
  }

  // Update button opens a modal dialog
  addButton.addEventListener("click", () => {
    dialog.showModal();
    openCheck(dialog);
  });

  // Form close button closes the dialog box
  closeButton.addEventListener("click", () => {
    dialog.close("noContent");
    openCheck(dialog);
  });
}