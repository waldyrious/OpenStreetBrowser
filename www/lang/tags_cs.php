<?
//  All tags should have translations in www/lang/tags_XX.php, with
//  language strings like "tag:key" for the translation of the key and
//  "tag:key=value" for the translation of the value. E.g.
//  $lang_str["tag:amenity"]=array("Amenity", "Amenities");
//  $lang_str["tag:amenity=bar"]=array("Bar", "Bars");
//
//  Furthermore you can describe the tags with the array $tag_type. Every
//  entry is an array again to further specify its type, e.g.:
//  $tag_type["width"]=array("number", "m", "in");
//                ^             ^       ^    ^
//                |             |       |    \-- the preferred unit in this locale
//                |             |       \------- the default unit for this tag
//                |             \--------------- the type of the value
//                \----------------------------- tag
//
//  This defines, that the default value for the tag width is a number, with
//  its default unit m (for meter) and the preferred unit for this locale is
//  in (for inch).
//
//  The following types are valid:
//  * text          default (e.g. religion, name)
//  * number        a value, with default unit and preferred unit as defined
//                  by the second and third entry in this array (e.g. width,
//                  voltage)
//  * count         an integer value (e.g. population)
//  * date          a date
//  * link          an Internet URL
//
//  NOTE: the $tag_type can already be defined, but it's not used yet.
//  There might also be more tag types soon and a way to format the output
//  (e.g. "100.000 m" or "2010-12-24").

// accomodation
$lang_str["tag:accomodation"]="Ubytování";

// address
$lang_str["tag:address"]="Adresa";

// addr:housenumber
$lang_str["tag:addr:housenumber"]="Číslo popisné";

// addr:interpolation
$lang_str["tag:addr:interpolation"]="Interpolovaná P.S.Č";

// aeroway
$lang_str["tag:aeroway"]="Vzdušná cesta";
$lang_str["tag:aeroway=runway"]="Ranvej";
#$lang_str["tag:aeroway=taxiway"]="Taxiway";

// admin_level
$lang_str["tag:admin_level=2"]="Státní hranice";
#$lang_str["tag:admin_level=3"]="Divisions";
$lang_str["tag:admin_level=4"]="Region";
#$lang_str["tag:admin_level=5"]="Community Border";
$lang_str["tag:admin_level=6"]="Kraj";
$lang_str["tag:admin_level=8"]="Hranice obce";
$lang_str["tag:admin_level=10"]="Městské části";

// amenity
$lang_str["tag:amenity"]="Občanská vybavenost";
$lang_str["tag:amenity=cinema"]=array("Kino", "Kina");
$lang_str["tag:amenity=restaurant"]=array("Restaurace", "Restaurace");
$lang_str["tag:amenity=pub"]=array("Hospoda", "Hospody");

// barrier
$lang_str["tag:barrier"]=array("Překážka", "Překážky");
$lang_str["tag:barrier=city_wall"]=array("Hradba", "Hradby");
$lang_str["tag:barrier=wall"]=array("Zeď", "Zdi");
$lang_str["tag:barrier=retaining_wall"]=array("Opěrná zeď", "Opěrné zdi");
$lang_str["tag:barrier=fence"]=array("Plot", "Ploty");
$lang_str["tag:barrier=hedge"]=array("Živý plot", "Živé ploty");

// cables
$lang_str["tag:cables"]="Kabely";

// cuisine
$lang_str["tag:cuisine"]="Kuchyně";
$lang_str["tag:cuisine=regional"]="regionální";

// description
$lang_str["tag:description"]="Popis";

// domination
#$lang_str["tag:domination"]="Domination";

// food
$lang_str["tag:food"]="Podává jídlo";

// highway
$lang_str["tag:highway"]=array("Pozemní komunikace", "Pozemní komunikace");
$lang_str["tag:highway=motorway"]="Dálnice";
$lang_str["tag:highway=motorway_link"]="Nájezdová nebo sjezdová rampa dálnice";
$lang_str["tag:highway=trunk"]="Rychlostní komunikace";
$lang_str["tag:highway=trunk_link"]="Nájezdová nebo sjezdová rampa rychl. komunikace";
$lang_str["tag:highway=primary"]="Silnice I. třídy";
$lang_str["tag:highway=primary_link"]="Nájezdová nebo sjezdová rampa sil. I. třídy";
$lang_str["tag:highway=secondary"]="Silnice II. třídy";
$lang_str["tag:highway=tertiary"]="Silnice III. třídy";
$lang_str["tag:highway=minor"]="Vedlejší cesta";
$lang_str["tag:highway=road"]="Cesta";
$lang_str["tag:highway=residential"]="Ulice";
$lang_str["tag:highway=unclassified"]="Nezařazená komunikace";
$lang_str["tag:highway=service"]="Účelová komunikace";
$lang_str["tag:highway=pedestrian"]="Pěší zóna";
$lang_str["tag:highway=living_street"]="Obytná zóna";
$lang_str["tag:highway=path"]="Stezka";
$lang_str["tag:highway=cycleway"]="Cyklostezka";
$lang_str["tag:highway=footway"]="Chodník";
$lang_str["tag:highway=bridleway"]="Cesta pro koně";
$lang_str["tag:highway=track"]="Lesní/Polní cesta";
$lang_str["tag:highway=path"]="Stezka";
$lang_str["tag:highway=steps"]="Schody";

// is_in
$lang_str["tag:is_in"]="Je v";

// leisure
$lang_str["tag:leisure=sports_centre"]="Sportovní centrum";
$lang_str["tag:leisure=golf_course"]="Golfové hiště";
$lang_str["tag:leisure=stadium"]="Stadion";
$lang_str["tag:leisure=track"]="Dráha";
$lang_str["tag:leisure=pitch"]="Hřiště";
$lang_str["tag:leisure=water_park"]="Aquapark";
$lang_str["tag:leisure=marina"]="Přístav";
$lang_str["tag:leisure=slipway"]="Slipway";
$lang_str["tag:leisure=fishing"]="Rybaření";
$lang_str["tag:leisure=nature_reserve"]="Přirodní rezervace";
$lang_str["tag:leisure=park"]="Park";
$lang_str["tag:leisure=playground"]="Hřiště";
$lang_str["tag:leisure=garden"]="Zahrada";
$lang_str["tag:leisure=common"]="Volně přístupná oblast";
$lang_str["tag:leisure=ice_rink"]="Kluziště";
$lang_str["tag:leisure=miniature_golf"]="Minigolf";
$lang_str["tag:leisure=swimming_pool"]="Bazén";
#$lang_str["tag:leisure=beach_resort"]="Beach Resort";
#$lang_str["tag:leisure=bird_hide"]="Bird Hide";
$lang_str["tag:leisure=sport"]="Jiný sport";

// man_made
$lang_str["tag:man_made"]="Umělé stavby";
$lang_str["tag:man_made=pipeline"]=array("Potrubí", "Potrubí");

// man_made - type
$lang_str["tag:type"]="Typ";
$lang_str["tag:type=gas"]="Plyn";
$lang_str["tag:type=heat"]="Vytápění";
$lang_str["tag:type=hot_water"]="Horká voda";
$lang_str["tag:type=oil"]="Ropa";
$lang_str["tag:type=sewage"]="Odpad";
$lang_str["tag:type=water"]="Voda";

// name
$lang_str["tag:name"]=array("Jméno", "Jména");

// network
$lang_str["tag:network"]="Síť";

// note
$lang_str["tag:note"]="Poznámka";

// old_name
$lang_str["tag:old_name"]="Staré jméno(-a)";

// opening_hours
$lang_str["tag:opening_hours"]="Otevírací doba";

// operator
#$lang_str["tag:operator"]="Operator";

// place
$lang_str["tag:place"]="Sídlo";
$lang_str["tag:place=continent"]=array("Kontinent", "Kontinenty");
$lang_str["tag:place=country"]=array("Stát", "Stát");
$lang_str["tag:place=state"]=array("Země", "Země");
$lang_str["tag:place=region"]=array("Region", "Regiony");
$lang_str["tag:place=county"]=array("Kraj", "Kraje");
$lang_str["tag:place=city"]=array("Město", "Města");
$lang_str["tag:place=town"]="Město";
$lang_str["tag:place=village"]=array("Vesnice", "Vesnice");
$lang_str["tag:place=suburb"]=array("Městská část", "Městské části");
$lang_str["tag:place=locality"]=array("Lokalita", "Lokality");
$lang_str["tag:place=island"]=array("Ostrov", "Ostrovy");
$lang_str["tag:place=islet"]=array("Ostrůvek", "Ostrůvky");

// population
$lang_str["tag:population"]="Počet obyvatel";
$tag_type["population"]=array("count");

// power
$lang_str["tag:power"]="Elektrická síť";
$lang_str["tag:power=generator"]="Elektrárna";
$lang_str["tag:power=line"]="Elektrické vedení";
$lang_str["tag:power=minor_line"]="Elektrické vedení NN";
$lang_str["tag:power=tower"]="Stožár elektrického vedení";
$lang_str["tag:power=pole"]="Sloup elektrického vedení";
$lang_str["tag:power=station"]="Rozvodna VVN/VN";
$lang_str["tag:power=sub_station"]="Trafostanice VN/NN";

// power_source
$lang_str["tag:power_source"]="Zdroj energie";
$lang_str["tag:power_source=biofuel"]="Biopalivo";
$lang_str["tag:power_source=oil"]="Ropa";
$lang_str["tag:power_source=coal"]="Uhlí";
$lang_str["tag:power_source=gas"]="Zemní plyn";
$lang_str["tag:power_source=waste"]="Odpad";
$lang_str["tag:power_source=hydro"]="Vodní";
$lang_str["tag:power_source=tidal"]="Příboj";
$lang_str["tag:power_source=wave"]="Vlny";
$lang_str["tag:power_source=geothermal"]="Geotermální energie";
$lang_str["tag:power_source=nuclear"]="Jádro";
$lang_str["tag:power_source=fusion"]="Fúze";
$lang_str["tag:power_source=wind"]="Vítr";
$lang_str["tag:power_source=photovoltaic"]="Solární články";
$lang_str["tag:power_source=solar-thermal"]="Solární kolektory";

// railway
$lang_str["tag:railway"]="Železnice";
$lang_str["tag:railway=rail"]=array("Železniční kolej", "Železniční koleje");
$lang_str["tag:railway=tram"]=array("Tramvajová kolej", "Tramvajové koleje");
$lang_str["tag:railway=platform"]=array("Nástupiště", "Nástupiště");

// real_ale
#$lang_str["tag:real_ale"]="Real ale offered";

// religion
$lang_str["tag:religion"]="Náboženství";
$lang_str["tag:religion=christian"]="křesťanství";
$lang_str["tag:religion=buddhist"]="buddhismus";
$lang_str["tag:religion=hindu"]="hinduismus";
$lang_str["tag:religion=jewish"]="judaismus";
$lang_str["tag:religion=muslim"]="islám";
$lang_str["tag:religion=multifaith"]="více náboženství";

// route
$lang_str["tag:route"]="Dopravní trasy";
$lang_str["tag:route=train"]="Vlak";
$lang_str["tag:route=railway"]="Železnice";
$lang_str["tag:route=rail"]="Železnice";
$lang_str["tag:route=light_rail"]="Rychlodráha";
$lang_str["tag:route=subway"]="Metro";
$lang_str["tag:route=tram"]="Tramvaj";
$lang_str["tag:route=tram_bus"]="Tramvaj a Autobus";
$lang_str["tag:route=trolley"]="Trolejbus";
$lang_str["tag:route=trolleybus"]="Trolejbus";
$lang_str["tag:route=bus"]="Autobus";
$lang_str["tag:route=minibus"]="Minibus";
$lang_str["tag:route=ferry"]="Trajekt";
$lang_str["tag:route=road"]="Cesta";
$lang_str["tag:route=bicycle"]="Kolo";
$lang_str["tag:route=hiking"]="Pěší turistika";
$lang_str["tag:route=mtb"]="Horské kolo";

// route_type
// the following tags are deprecated
$lang_str["tag:route_type"]="Typ cesty";

// shop
$lang_str["tag:shop"]="Obchod";

// sport
$lang_str["tag:sport"]="Sport";
#$lang_str["tag:sport=9pin"]="9pin Bowling";
#$lang_str["tag:sport=10pin"]="10pin Bowling";
$lang_str["tag:sport=archery"]="Lukostřelba";
$lang_str["tag:sport=athletics"]="Atletika";
#$lang_str["tag:sport=australian_football"]="Australian Football";
$lang_str["tag:sport=baseball"]="Baseball";
$lang_str["tag:sport=basketball"]="Basketbal";
$lang_str["tag:sport=beachvolleyball"]="Beachvolejbal";
$lang_str["tag:sport=boules"]="Petanque";
#$lang_str["tag:sport=bowls"]="Bowls";
$lang_str["tag:sport=canoe"]="Kánoe";
$lang_str["tag:sport=chess"]="Šachy";
$lang_str["tag:sport=climbing"]="Horolezectví";
$lang_str["tag:sport=cricket"]="Kriket";
#$lang_str["tag:sport=cricket_nets"]="Cricket Nets";
$lang_str["tag:sport=croquet"]="Kroket";
$lang_str["tag:sport=cycling"]="Cyklistika";
$lang_str["tag:sport=diving"]="Potápění";
$lang_str["tag:sport=dog_racing"]="Závody psů";
$lang_str["tag:sport=equestrian"]="Krasojezdectví";
$lang_str["tag:sport=football"]="Americký Fotbal";
$lang_str["tag:sport=golf"]="Golf";
$lang_str["tag:sport=gymnastics"]="Gymnastika";
$lang_str["tag:sport=hockey"]="Hokej";
$lang_str["tag:sport=horse_racing"]="Dostihy";
$lang_str["tag:sport=korfball"]="Korfbal";
#$lang_str["tag:sport=motor"]="Motor";
#$lang_str["tag:sport=multi"]="Multi";
$lang_str["tag:sport=orienteering"]="Orientační závod";
#$lang_str["tag:sport=paddle_tennis"]="Paddle Tennis";
$lang_str["tag:sport=paragliding"]="Paragliding";
#$lang_str["tag:sport=pelota"]="Pelota";
#$lang_str["tag:sport=racquet"]="Racquet";
$lang_str["tag:sport=rowing"]="Veslování";
$lang_str["tag:sport=rugby"]="Rugby";
$lang_str["tag:sport=shooting"]="Střelba";
$lang_str["tag:sport=skating"]="Brusle";
$lang_str["tag:sport=skateboard"]="Skateboard";
$lang_str["tag:sport=skiing"]="Lyžování";
$lang_str["tag:sport=soccer"]="Fotbal";
$lang_str["tag:sport=swimming"]="Plavání";
$lang_str["tag:sport=table_tennis"]="Stolní tenis";
$lang_str["tag:sport=team_handball"]="Házená";
$lang_str["tag:sport=tennis"]="Tenis";
$lang_str["tag:sport=volleyball"]="Volejbal";

// tracks
$lang_str["tag:tracks"]="Počet kolejí";
$lang_str["tag:tracks=single"]="Jedna";
$lang_str["tag:tracks=double"]="Dvě";
$lang_str["tag:tracks=multiple"]="Více";

// vending
#$lang_str["tag:vending"]="Vending";

// voltage
$lang_str["tag:voltage"]="Napětí";
$tag_type["voltage"]=array("number", "V", "V");

// wires
$lang_str["tag:wires"]="Dráty";
$tag_type["wires"]=array("count");

// website
$lang_str["tag:website"]="Webová stránka";
$tag_type["website"]=array("link");
// The following $lang_str were not defined in the English language file and might be deprecated or wrong:
$lang_str["tag:place=city;population>1000000"]=array("Město, > 1 Mil. obyvatel", "Města, > 1 Mil. obyvatel");
$lang_str["tag:place=city;population>200000"]=array("Město, > 200 000 obyvatel", "Města, > 200 000 obyvatel");
$lang_str["tag:place=town;population>30000"]=array("Město, > 30 000 obyvatel", "Města, > 30 000 obyvatel");
