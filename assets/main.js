function login() {
  const username = document.getElementById("username").value;
  const emailPhone = document.getElementById("email-phone").value;
  const password = document.getElementById("password").value;
  const test = document.getElementById("test");

  if (
    username === "" &&
    emailPhone == "admin123@gmail.com" &&
    password == "admin123"
  ) {
    alert("Jangan lupa isi username");
  } else if (emailPhone == "admin123@gmail.com" && password == "admin123") { 
    alert(`Welcome to AnB Marketplace ${username}`);
    test.classList.remove("test");
  } else {
    alert("Email/Password salah");
  }
}
