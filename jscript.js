
///  THIS WILL CREATE A NEW TABLE INSIDE THE page which has DIV HAVING ID "JsTableArea"///
/////////////////////////////////////////////////////////////////////////////

//Arrays for image sourse and discription 
var imagSourse = ['images//trurkishair.jpg', 'images//aircanada.jpg', 'images//westjet.png'];
var imageDiscription = ['Turkish Air', 'Air Canada', 'West Jet'];
var imageLink = ["http://www.turkishairlines.com/", "http://www.aircanada.com/", "http://www.westjet.com/"];
/// we are crating a table here
var MyTableId = document.getElementById("JsTableArea");
var newTable = document.createElement('table');
MyTableId.appendChild(newTable);

//To ceate a row inside the table


var MyRowId = document.getElementsByTagName('table')[0];
for (var i = 0; i <= 2; i++) {
    //this will create rows in column 1
    var newRow = document.createElement('tr');
    MyRowId.appendChild(newRow);
    // this will take images form the array and put it in the first column of each row.
    var image = document.createElement('img');
    image.src = imagSourse[i];
    newRow.appendChild(image);

    //This will create 2nd column of each row
    var MycolumnId = document.getElementsByTagName('tr')[i];
    var newColumn = document.createElement('td');
    var textInColumn = document.createTextNode(imageDiscription[i]);

    newColumn.appendChild(textInColumn);
    MycolumnId.appendChild(newColumn);

    //On Click event listner starts here
    newRow.addEventListener('click', function (event) {
        
        var k = event.currentTarget.rowIndex;
        var myNewtab = window.open(imageLink[k]);
        
        setTimeout(function()  // Will close the window after 6 seconds
        {
            myNewtab.close();   
        },6000)
        
    });
    
}

