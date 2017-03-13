var METRO_MANILA = [
  "Caloocan", "Las Pinas", "Makati", "Malabon", "Mandaluyong",
  "Manila", "Marikina", "Muntinlupa", "Navotas", "Paranaque",
  "Pasay", "Pasig", "Pateros", "Quezon City", "San Juan",
  "Taguig", "Valenzuela"
];

var BULACAN = [
  "Angat", "Balagtas", "Baliuag", "Bocaue", "Bulakan", "Bustos",
  "Calumpit", "Dona Remedios Trinidad", "Guiguinto", "Hagonoy",
  "Malolos", "Marilao", "Meycauayan", "Norzagaray", "Obando",
  "Pandi", "Paombong", "Plaridel", "Pulilan", "San Ildefonso",
  "San Jose del Monte", "San Miguel", "San Rafael", "Santa Maria"
];

function provinceChange() {
  $("#city_select").html("");

  if ($("#province_select").val() == "Bulacan") {
    for (var i = 0; i < BULACAN.length; i ++) {
      $("#city_select").append("<option value='" + BULACAN[i] + "'>" + BULACAN[i] + "</option>");
    }
  } else {
    for (var i = 0; i < METRO_MANILA.length; i ++) {
      $("#city_select").append("<option value='" + METRO_MANILA[i] + "'>" + METRO_MANILA[i] + "</option>");
    }
  }
}
