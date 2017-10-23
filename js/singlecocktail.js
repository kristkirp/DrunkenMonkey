/**
 * Created by krist on 2017-10-23.
 */


$(document).ready(function () {
    var idcocktail = ""
    var url = "http://www.thecocktaildb.com/api/json/v1/1/list.php?c=list";
    $.ajax({
        type: "POST",
        url: url,
        data: JSON,
        success: function (data) {

            displayCategories(data);

        }
    });
});

function displayCategories(data){

    data.drinks.sort(function(a,b) {
        return (a.strCategory > b.strCategory) ? 1 : ((b.strCategory > a.strCategory) ? -1 : 0);
    } );
    for (var i = 0; i < data.drinks.length; i++) {

        $("#SingleCategory").append('<div class="col-md-3 col-sm-6 col-xs-12"><div class="categoryItem"> ' +
            '<center><img src="img/CocktailCategoriesPics/'+data.drinks[i].strCategory.split('/')[0].trim()+'-icon.png"' +
            ' class="img-fluid img-responsive" width="100" height="100"/></center><h2 style="text-align: center!important"><a href="cocktail-category.html">' + data.drinks[i].strCategory +
            '</a></h2> </div> </div>');
    }
}