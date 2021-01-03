//  fetch data from url

// url
let url =
  "https://api.themoviedb.org/3/trending/all/day?api_key=ce99db7200800290876aa2d74aec1f1f";

let data;
//  downloading content from url
fetch(url)
  .then((response) => response.json())
  .then((raw) => fetchData(raw));

function fetchData(data) {
  var table = document.getElementById("table");
  var tablebody = document.createElement("tbody");
  let results = data["results"];

  for (var i = 0; i < results.length; i++) {
    var row = document.createElement("tr");
    var item = results[i];

    for (var j = 0; j < 2; j++) {
      var cell = document.createElement("td");
      var data;
      if (j == 0) {
        data = item["title"];
      } else {
        data = item["overview"];
      }
      var cellText = document.createTextNode(data);
      cell.appendChild(cellText);
      row.appendChild(cell);
    }
    tablebody.appendChild(row);
  }

  table.appendChild(tablebody);


}
