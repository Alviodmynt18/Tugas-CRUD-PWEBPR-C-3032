// Ambil data pengguna dari session storage// Variabel global untuk menyimpan informasi pengguna
let loggedInUsername = "";
let loggedInPhone = "";

// Ambil data pengguna dari session storage dan simpan ke dalam variabel
document.addEventListener("DOMContentLoaded", function () {
  const loggedInUser = JSON.parse(sessionStorage.getItem("loggedInUser"));

  if (loggedInUser) {
    // Simpan username dan phone ke dalam variabel global
    loggedInUsername = loggedInUser.username;
    loggedInPhone = loggedInUser.phone;

    // Tampilkan informasi pengguna di halaman
    const usernameElements = document.querySelectorAll(".username");
    const phoneElements = document.querySelectorAll(".phone");
    usernameElements.forEach(function (element) {
      element.textContent = loggedInUsername;
    });
    phoneElements.forEach(function (element) {
      element.textContent = `No Hp : ${loggedInPhone}`;
    });
  } else {
    // Redirect ke halaman login jika tidak ada data pengguna yang tersimpan
    window.location.href = "../index.php";
  }
});
var selectedRow = null;

function onFormSubmit(e) {
  event.preventDefault();
  var formData = readFormData();
  if (selectedRow == null) {
    insertNewRecord(formData);
  } else {
    updateRecord(formData);
  }
  resetForm();
}

//Retrieve the data
function readFormData() {
  var formData = {};
  formData["IdMusic"] = document.getElementById("IdMusic").value;
  formData["JudulMusic"] = document.getElementById("JudulMusic").value;
  formData["Singer"] = document.getElementById("Singer").value;
  formData["Deskripsi"] = document.getElementById("Deskripsi").value;
  formData["LinkMusic"] = document.getElementById("LinkMusic").value;

  return formData;
}

//Insert the data
function insertNewRecord(data) {
  var table = document
    .getElementById("storeList")
    .getElementsByTagName("tbody")[0];
  var newRow = table.insertRow(table.length);
  var cell1 = newRow.insertCell(0);
  cell1.innerHTML = data.IdMusic;
  var cell2 = newRow.insertCell(1);
  cell2.innerHTML = data.JudulMusic;
  var cell3 = newRow.insertCell(2);
  cell3.innerHTML = data.Singer;
  var cell4 = newRow.insertCell(3);
  cell4.innerHTML = data.Deskripsi;
  var cell5 = newRow.insertCell(4);
  cell5.innerHTML =
    '<a href="' +
    data.LinkMusic +
    '" class="btn btn-success  fs-5 p-3 rounded text-white" target="_blank">' +
    '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-spotify" viewBox="0 0 16 16">' +
    '<path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.669 11.538a.5.5 0 0 1-.686.165c-1.879-1.147-4.243-1.407-7.028-.77a.499.499 0 0 1-.222-.973c3.048-.696 5.662-.397 7.77.892a.5.5 0 0 1 .166.686m.979-2.178a.624.624 0 0 1-.858.205c-2.15-1.321-5.428-1.704-7.972-.932a.625.625 0 0 1-.362-1.194c2.905-.881 6.517-.454 8.986 1.063a.624.624 0 0 1 .206.858m.084-2.268C10.154 5.56 5.9 5.419 3.438 6.166a.748.748 0 1 1-.434-1.432c2.825-.857 7.523-.692 10.492 1.07a.747.747 0 1 1-.764 1.288"></path>' +
    "</svg> Link Music</a>";

  // Masukkan username dan phone ke dalam cell 5 dan 6
  var cell6 = newRow.insertCell(5);
  cell6.innerHTML = loggedInUsername;
  var cell7 = newRow.insertCell(6);
  cell7.innerHTML = loggedInPhone;
  var cell8 = newRow.insertCell(7);
  cell8.innerHTML = `<button class="btn btn-warning fs-5 p-3 rounded text-white" onClick="onEdit(this)">Edit</button> <button class="btn btn-danger fs-5 p-3 rounded" onClick="onDelete(this)">Delete</button>`;
}

//Edit the data
var selectedRow;

function onEdit(td) {
  selectedRow = td.parentElement.parentElement;
  document.getElementById("IdMusic").value = selectedRow.cells[0].innerHTML;
  document.getElementById("JudulMusic").value = selectedRow.cells[1].innerHTML;
  document.getElementById("Singer").value = selectedRow.cells[2].innerHTML;
  document.getElementById("Deskripsi").value = selectedRow.cells[3].innerHTML;
  document.getElementById("LinkMusic").value = selectedRow.cells[4]
    .getElementsByTagName("a")[0]
    .getAttribute("href");
}

function updateRecord(formData) {
  selectedRow.cells[0].innerHTML = formData.IdMusic;
  selectedRow.cells[1].innerHTML = formData.JudulMusic;
  selectedRow.cells[2].innerHTML = formData.Singer;
  selectedRow.cells[3].innerHTML = formData.Deskripsi;
  selectedRow.cells[4].innerHTML = `<a href="${formData.LinkMusic}" class="btn btn-success  fs-5 p-3 rounded text-white" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-spotify" viewBox="0 0 16 16"><path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.669 11.538a.5.5 0 0 1-.686.165c-1.879-1.147-4.243-1.407-7.028-.77a.499.499 0 0 1-.222-.973c3.048-.696 5.662-.397 7.77.892a.5.5 0 0 1 .166.686m.979-2.178a.624.624 0 0 1-.858.205c-2.15-1.321-5.428-1.704-7.972-.932a.625.625 0 0 1-.362-1.194c2.905-.881 6.517-.454 8.986 1.063a.624.624 0 0 1 .206.858m.084-2.268C10.154 5.56 5.9 5.419 3.438 6.166a.748.748 0 1 1-.434-1.432c2.825-.857 7.523-.692 10.492 1.07a.747.747 0 1 1-.764 1.288"></path></svg> Link Lagu</a>`;
}

//Delete the data
function onDelete(td) {
  if (confirm("Do you want to delete this record?")) {
    row = td.parentElement.parentElement;
    document.getElementById("storeList").deleteRow(row.rowIndex);
    resetForm();
  }
}

//Reset the data
function resetForm() {
  document.getElementById("IdMusic").value = "";
  document.getElementById("JudulMusic").value = "";
  document.getElementById("Singer").value = "";
  document.getElementById("Deskripsi").value = "";
  document.getElementById("LinkMusic").value = "";

  selectedRow = null;
}
