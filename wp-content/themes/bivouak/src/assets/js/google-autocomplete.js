
var options = {
   types: ['(cities)'],
   componentRestrictions: {country: 'fr'}
};
var input = document.getElementById('searchTextField');
autocomplete = new google.maps.places.Autocomplete(input, options);
