function changeView() {
  var signUpBox = document.getElementById("signUpBox");
  var signInBox = document.getElementById("signInBox");

  signUpBox.classList.toggle("d-none");
  signInBox.classList.toggle("d-none");
}

function signUp() {
  var firstName = document.getElementById("fname");
  var lastName = document.getElementById("lname");
  var email = document.getElementById("email");
  var password = document.getElementById("pass");
  var mobile = document.getElementById("mobile");
  var gender = document.getElementById("gender");

  var form = new FormData();
  form.append("firstname", firstName.value);
  form.append("lastname", lastName.value);
  form.append("em", email.value);
  form.append("pw", password.value);
  form.append("mob", mobile.value);
  form.append("gender", gender.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text = request.responseText;
      if (text == "success") {
        document.getElementById("msg").innerHTML = text;
        document.getElementById("msg").className = "bi bi-check2-circle fs-5";
        document.getElementById("alertdiv").className = "alert alert-success";
        document.getElementById("msgdiv").className = "d-block";
      } else {
        document.getElementById("msg").innerHTML = text;
        document.getElementById("msgdiv").className = "d-block";
      }
    }
  };

  request.open("POST", "signUpProcess.php", true);
  request.send(form);
}

function signIn() {
  var email = document.getElementById("email2");
  var password = document.getElementById("password2");
  var rememberme = document.getElementById("rememberme");

  var form = new FormData();
  form.append("email2", email.value);
  form.append("pass2", password.value);
  form.append("remember", rememberme.checked);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text2 = request.responseText;
      if (text2 == "success") {
        window.location = "index.php";
        document.getElementById("msg2").innerHTML = text2;
        document.getElementById("msg2").className = "bi bi-check2-circle fs-5";
        document.getElementById("alertdiv2").className = "alert alert-success";
        document.getElementById("msgdiv2").className = "d-block";
      } else {
        document.getElementById("msg2").innerHTML = text2;
        document.getElementById("msg2").className = "bi bi-x-octagon-fill fs-5";
        document.getElementById("alertdiv2").className = "alert alert-danger";
        document.getElementById("msgdiv2").className = "d-block";
      }
    }
  };

  request.open("POST", "signInProcess.php", true);
  request.send(form);
}

var bm;
function forgotPassword() {
  var sendEmail = document.getElementById("email2");

  var req = new XMLHttpRequest();

  req.onreadystatechange = function () {
    if (req.readyState == 4) {
      var text3 = req.responseText;
      if (text3 == "success") {
        alert(
          "Verification code has sent to your Email. Please check your inbox"
        );
        var modal = document.getElementById("forgotPasswordModal");
        bm = new bootstrap.Modal(modal);
        bm.show();
      } else {
        alert(text3);
      }
    }
  };

  req.open("GET", "forgotPass.php?email2=" + sendEmail.value, true);
  req.send();
}

function ShowPass() {
  var input = document.getElementById("newpassinput");
  var eye = document.getElementById("eye1");

  if (input.type == "password") {
    input.type = "text";
    eye.className = "bi bi-eye-fill";
  } else {
    input.type = "password";
    eye.className = "bi bi-eye-slash-fill";
  }
}

function ShowRetypePass() {
  var input = document.getElementById("retypepassinput");
  var eye = document.getElementById("eye2");

  if (input.type == "password") {
    input.type = "text";
    eye.className = "bi bi-eye-fill";
  } else {
    input.type = "password";
    eye.className = "bi bi-eye-slash-fill";
  }
}

function resetpass() {
  var email = document.getElementById("email2");
  var newpw = document.getElementById("newpassinput");
  var retypepw = document.getElementById("retypepassinput");
  var verify = document.getElementById("verifycode");

  var form = new FormData();
  form.append("em", email.value);
  form.append("npw", newpw.value);
  form.append("rtpw", retypepw.value);
  form.append("vc", verify.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text4 = request.responseText;
      if (text4 == "success") {
        bm.hide();
        alert("Password Reset Success");
      } else {
        alert(text4);
      }
    }
  };

  request.open("POST", "resetPass.php", true);
  request.send(form);
}

function signout() {
  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text5 = request.responseText;
      if (text5 == "success") {
        window.location = "signup.php";
      } else {
        alert(text5);
      }
    }
  };

  request.open("GET", "SignoutProcess.php", true);
  request.send();
}

function changeimg() {
  var view = document.getElementById("viewimg"); //Get id from profile image
  var filechooser = document.getElementById("profileimg"); //Get file chooser

  filechooser.onchange = function () {
    var file1 = this.files[0];
    var url = window.URL.createObjectURL(file1);
    view.src = url;
  };
}

function updatePro() {
  var fname = document.getElementById("fname");
  var lname = document.getElementById("lname");
  var mobile = document.getElementById("mob");
  var line1 = document.getElementById("add01");
  var line2 = document.getElementById("add02");
  var province = document.getElementById("province");
  var district = document.getElementById("district");
  var city = document.getElementById("city");
  var postal = document.getElementById("postal");
  var image = document.getElementById("profileimg");

  var form = new FormData();
  form.append("fname", fname.value);
  form.append("lname", lname.value);
  form.append("mob", mobile.value);
  form.append("add01", line1.value);
  form.append("add02", line2.value);
  form.append("province", province.value);
  form.append("district", district.value);
  form.append("city", city.value);
  form.append("postal", postal.value);

  if (image.files.length == 0) {
    var confirmation = confirm(
      "Are you sure You don't need to update Profile image ??"
    );

    if (confirmation) {
      alert("You haven't selected any image");
    }
  } else {
    form.append("image", image.files[0]);
  }

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text6 = request.responseText;
      if (text6 == "success") {
        window.location.reload();
      } else {
        alert(text6);
      }
    }
  };

  request.open("POST", "updateProfileProcess.php", true);
  request.send(form);
}

function submittour() {
  var firstName = document.getElementById("fname");
  var lastName = document.getElementById("lname");
  var mobile = document.getElementById("mob");
  var email = document.getElementById("email");
  var city = document.getElementById("city");
  var desc = document.getElementById("desc");

  var form = new FormData();

  form.append("fname", firstName.value);
  form.append("lname", lastName.value);
  form.append("mob", mobile.value);
  form.append("email", email.value);
  form.append("city", city.value);
  form.append("desc", desc.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text7 = request.responseText;

      if (text7 == "Submitted Successfully") {
        emailtour();
        window.location.reload();
        window.location = "invoice.php";

        document.getElementById("addmsg").innerHTML = text7;
        document.getElementById("addmsg").className =
          "bi bi-check2-circle fs-5";
        document.getElementById("addalertdiv").className =
          "alert alert-success";
        document.getElementById("addmsgdiv").className = "d-block";
      } else {
        document.getElementById("addmsg").innerHTML = text7;
        document.getElementById("addmsg").className =
          "bi bi-x-octagon-fill fs-5";
        document.getElementById("addalertdiv").className = "alert alert-danger";
        document.getElementById("addmsgdiv").className = "d-block";
      }
    }
  };

  request.open("POST", "AddProductProcess.php", true);
  request.send(form);
}

function feedbackpro() {
  var name = document.getElementById("Name");
  var date = document.getElementById("date");
  var type = document.getElementById("type");
  var feed = document.getElementById("feedback");

  var form = new FormData();

  form.append("Name", name.value);
  form.append("date", date.value);
  form.append("type", type.value);
  form.append("feedback", feed.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var text9 = request.responseText;

      if (text9 == "Submitted Successfully") {
        window.location.reload();
        document.getElementById("addmsg").innerHTML = text9;
        document.getElementById("addmsg").className =
          "bi bi-check2-circle fs-5";
        document.getElementById("addalertdiv").className =
          "alert alert-success";
        document.getElementById("addmsgdiv").className = "d-block";
      } else {
        document.getElementById("addmsg").innerHTML = text9;
        document.getElementById("addmsg").className =
          "bi bi-x-octagon-fill fs-5";
        document.getElementById("addalertdiv").className = "alert alert-danger";
        document.getElementById("addmsgdiv").className = "d-block";
      }
    } else {
    }
  };

  request.open("POST", "feedbackProcess.php", true);
  request.send(form);
}

function emailtour() {
  var sendEmail = document.getElementById("email");

  var req = new XMLHttpRequest();

  req.onreadystatechange = function () {
    if (req.readyState == 4 && req.status == 200) {
      var text11 = req.responseText;
      if (text11 == "Submitted Successfully") {
        alert(
          "Thanks for the booking! <br> Your Order Number has been Recieved to your Email.<br>Please check your inbox!"
        );
      } else {
        alert(text11);
      }
    }
  };

  req.open("GET", "contactemail.php?email=" + sendEmail.value, true);
  req.send();
}

function printInvoice() {
  var body = document.body.innerHTML;
  var page = document.getElementById("page").innerHTML;
  document.body.innerHTML = page;
  window.print();
  document.body.innerHTML = body;
  adminEmailTour();

}

var av;
function adminVerification() {
  var email = document.getElementById("e");

  var adminForm = new FormData();
  adminForm.append("e", email.value);

  var req = new XMLHttpRequest();

  req.onreadystatechange = function () {
    if (req.readyState == 4) {
      var t = req.responseText;
      if (t == "success") {
        var adminVerificationModal =
          document.getElementById("veriFicationModal");
        av = new bootstrap.Modal(adminVerificationModal);
        av.show();
      } else {

      }
    }
  };
  req.open("POST", "adminVeriFicationProcess.php", true);
  req.send(adminForm);
}

function verify() {
  var VeriFication = document.getElementById("vCode");

  var req = new XMLHttpRequest();

  req.onreadystatechange = function () {
    if (req.readyState == 4) {
      var t = req.responseText;
      if (t == "success") {
        av.hide();
        window.location = "adminPanel.php";
      } else {
        alert("Something Went Wrong");
      }
    }
  };
  req.open("GET", "veriFicationProcess.php?v=" + VeriFication.value, true);
  req.send();
}

function searchMU() {
  var search = document.getElementById("mu").value;

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text = request.responseText;
      document.getElementById("searchResults").innerHTML = text;
    }
  };
  request.open("GET", "SearchInmanageUser.php?mu=" + search, true);
  request.send();
}

function blockUser(email) {
  var req = new XMLHttpRequest();

  req.onreadystatechange = function () {
    if (req.readyState == 4) {
      var txt = req.responseText;
      if (txt == "Blocked") {
        document.getElementById("UB" + email).innerHTML =
          "<i class='bi bi-patch-check-fill fs-1'></i>";
        document.getElementById("UB" + email).classList =
          "btn bg-black rounded-circle border border-2 border-success text-success fw-bold";
      } else if (txt == "UnBlocked") {
        document.getElementById("UB" + email).innerHTML =
          "<i class='bi bi-exclamation-diamond-fill fs-1'></i>";
        document.getElementById("UB" + email).classList =
          "btn bg-black rounded-circle border border-2 border-danger text-danger fw-bold";
      } else {
        alert(txt);
      }
    }
  };

  req.open("GET", "UserBlockProcess.php?email=" + email, true);
  req.send();
}


function searchMP() {
  var search = document.getElementById("mp").value;

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text = request.responseText;
      document.getElementById("searchResults").innerHTML = text;
    }
  };
  request.open("GET", "SearchINmanageProduct.php?mp=" + search, true);
  request.send();
}

function ADsignout() {
  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
      if (request.readyState == 4) {
          var text5 = request.responseText;
          if (text5 == "success") {
        window.location = "adminSignin.php";
              
          } else {
              alert(text5);
          }
      }
  };

  request.open("GET", "ADSignoutProcess.php", true);
  request.send();
}

function adminEmailTour() {
  var email = document.getElementById("email");

  var adminEmailForm = new FormData();
  adminEmailForm.append("email", email.value);

  var req = new XMLHttpRequest();

  req.onreadystatechange = function () {
    if (req.readyState == 4 && req.status == 200) {
      var text15 = req.responseText;
      if (text15 == "Submitted Successfully") {

      } else {
        alert(text15);
      }
    }
  };

  req.open("POST", "adminEmail.php", true);
  req.send(adminEmailForm);
}
