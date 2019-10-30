function loadDoc() {
  var http = new XMLHttpRequest();
  http.onreadystatechange = function () {
    if (http.readyState == 4 && http.status == 200) {
      // nhan du lieu tra ve tu may chu, url la https://namcoi.com/aptech-demo/user-crud-laravel/public/api/users
      var duLieuTraVe = http.responseText
      http.responseText;
      // gan du lieu tra ve duoi dang TEXT vao bien duLieuTraVe
      // console.log(duLieuTraVe);
      // in duLieuTraVe len console
      var kieuDuLieuTraVe = typeof (duLieuTraVe);
      // function typeof lay kieu cua bien duLieuTraVe va gan vao bien kieuDuLieuTraVe
      // console.log(kieuDuLieuTraVe);
      // in kieuDuLieuTraVe len console
      var chuyenJSONThanhObject = JSON.parse(duLieuTraVe);
      // su dung oject JSON va function parse cua no, de chuyen doi duLieuTraVe thanh Object, sau do gan vao bien chuyenJSONThanhObject 
      // console.log(chuyenJSONThanhObject);
      // in gia tri trong bien chuyenJSONThanhObject ra console
      var kieuCuachuyenJSONThanhObject = typeof (chuyenJSONThanhObject);
      // gan kieu cua chuyenJSONThanhObject vao bien kieuCuachuyenJSONThanhObject
      // console.log(kieuCuachuyenJSONThanhObject);
      // in kieu cua chuyenJSONThanhObject
      // console.log(chuyenJSONThanhObject.users[0].id);



      // BAT TABLE BODY DUA TREN ID
      var tableBody = document.getElementById('nam');
      var arrayKeyOfEachRow = Object.keys(chuyenJSONThanhObject.users[0]);

      for (var i = 0; i < chuyenJSONThanhObject.users.length; i++) {
        // TAO TR CHO TABLE
        var tableRow = document.createElement('tr');
        tableBody.appendChild(tableRow);
        for (var j = 0; j < arrayKeyOfEachRow.length; j++) {
          console.log(chuyenJSONThanhObject.users[i][arrayKeyOfEachRow[j]]);
          if (arrayKeyOfEachRow[j] == "created_at" || arrayKeyOfEachRow[j] == "updated_at") {
            break;
          }
          var tableData = document.createElement('td');
          tableData.innerHTML = chuyenJSONThanhObject.users[i][arrayKeyOfEachRow[j]];
          tableRow.appendChild(tableData);

        }
        // var tableDataId = document.createElement('td');
        // tableDataId.innerHTML = chuyenJSONThanhObject.users[i].id;
        // tableRow.appendChild(tableDataId);

        // var tableDataName = document.createElement('td');
        // tableDataName.innerHTML = chuyenJSONThanhObject.users[i].name;
        // tableRow.appendChild(tableDataName);

        // var tableDataEmail = document.createElement('td');
        // tableDataEmail.innerHTML = chuyenJSONThanhObject.users[i].email;
        // tableRow.appendChild(tableDataEmail);

        // var tableDataPassword = document.createElement('td');
        // tableDataPassword.innerHTML = chuyenJSONThanhObject.users[i].password;
        // tableRow.appendChild(tableDataPassword);

      }

    }
  };
  http.open("GET", "https://namcoi.com/aptech-demo/user-crud-laravel/public/api/users", true);
  http.send();
}