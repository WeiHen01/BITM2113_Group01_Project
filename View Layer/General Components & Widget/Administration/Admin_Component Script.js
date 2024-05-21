// Step 2: Implement navigate to Log out process.php function
function confirmLogout(){
    // pop up confirm dialog for asking confirmation to log out
    if(window.confirm("Do you sure to log out?") == true){
        window.location.href = '../../Controller Layer/User/User Logout Process.php';
    }
}
function openNav() {
    document.getElementById("sideMenu").classList.add("opened");
    document.getElementById("sideMenu").style.width = "20vw";
    document.getElementById("contentArea").style.marginLeft = "20vw";
    document.getElementById("menuIcon").classList.remove("fa-bars");
    document.getElementById("menuIcon").classList.add("fa-chevron-left");
}

function closeNav() {
    document.getElementById("sideMenu").classList.remove("opened");
    document.getElementById("sideMenu").style.width = "0";
    document.getElementById("contentArea").style.marginLeft = "0";
    document.getElementById("menuIcon").classList.remove("fa-chevron-left");
    document.getElementById("menuIcon").classList.add("fa-bars");
}

function toggleSidebar() {
    var sideMenu = document.getElementById("sideMenu");
    if (sideMenu.classList.contains("opened")) {
        closeNav();
    } else {
        openNav();
    }
}

function showContent(content) {
    var links = document.querySelectorAll(".mainMenu a");
    links.forEach(function(link) {
        link.classList.remove("active");
    });

    var currentLink = document.querySelector("a[href='javascript:void(0)'][onclick=\"showContent('" + content + "')\"]");
    currentLink.classList.add("active");

    document.getElementById("contentTitle").textContent = content + " page";
    closeNav();
}