/* https://developer.mozilla.org/en-US/docs/Web/API/HTMLDialogElement/close */


function fiveFun() {
  const addButton = document.getElementById("add5");
  const closeButton = document.getElementById("close5");
  const dialog = document.getElementById("favDialog5");

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