function sessionStorageClose() {
    sessionStorage.clear();

    window.location.href = "../login.php";
}