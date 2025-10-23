<!-- JavaScript -->
  <script>
    const otevritDialog = document.getElementById("otevritDialog");
    const zavritDialog = document.getElementById("zavritDialog");
    const dialogFormular = document.getElementById("dialogFormular");

    otevritDialog.addEventListener("click", () => {
      dialogFormular.showModal();
    });

    zavritDialog.addEventListener("click", () => {
      dialogFormular.close();
    });
  </script>