<?php
// This is file installs the map data for the EmpiresCoalitions variant
defined('IN_CODE') or die('This script can not be run by itself.');
require_once("variants/install.php");

InstallTerritory::$Territories=array();
$countries=$this->countries;
$territoryRawData=array(
	array('Iceland', 'Coast', 'Yes', 10, 291, 100, 175, 54),
	array('Edinburgh', 'Coast', 'Yes', 2, 368, 385, 212, 219),
	array('Liverpool', 'Coast', 'Yes', 2, 337, 459, 194, 260),
	array('Ireland', 'Coast', 'No', 2, 265, 440, 155, 252),
	array('Wales', 'Coast', 'No', 2, 320, 553, 166, 302),
	array('London', 'Coast', 'Yes', 2, 379, 560, 221, 317),
	array('Christiania', 'Coast', 'Yes', 3, 569, 337, 316, 204),
	array('Sweden', 'Coast', 'Yes', 3, 639, 452, 383, 168),
	array('Finnmark', 'Coast', 'No', 3, 788, 75, 454, 38),
	array('Finland', 'Coast', 'Yes', 0, 781, 297, 465, 173),
	array('St. Petersburg', 'Coast', 'Yes', 7, 966, 348, 598, 151),
	array('St. Petersburg (North Coast)', 'Coast', 'No', 7, 926, 235, 530, 127),
	array('St. Petersburg (South Coast)', 'Coast', 'No', 7, 890, 362, 508, 191),
	array('Urals', 'Land', 'No', 7, 1231, 325, 708, 196),
	array('Moscow', 'Land', 'Yes', 7, 956, 471, 547, 265),
	array('Sevastopol', 'Coast', 'Yes', 7, 1148, 762, 664, 437),
	array('Ukraine', 'Land', 'No', 7, 1084, 642, 604, 373),
	array('Kiev', 'Land', 'Yes', 7, 934, 595, 504, 351),
	array('Livonia', 'Coast', 'No', 7, 830, 420, 479, 238),
	array('Konigsberg', 'Coast', 'Yes', 6, 745, 536, 432, 306),
	array('Yorkshire', 'Coast', 'No', 2, 376, 495, 215, 285),
	array('Poland', 'Land', 'No', 6, 751, 583, 434, 338),
	array('Breslau', 'Land', 'Yes', 6, 676, 617, 404, 362),
	array('Berlin', 'Coast', 'Yes', 6, 667, 536, 372, 319),
	array('Mecklenburg', 'Coast', 'Yes', 0, 615, 527, 350, 303),
	array('Schleswig', 'Coast', 'No', 3, 553, 507, 317, 287),
	array('Schleswig (East Coast)', 'Coast', 'No', 3, 554, 494, 323, 291),
	array('Schleswig (West Coast)', 'Coast', 'No', 3, 543, 497, 315, 292),
	array('Copenhagen', 'Coast', 'Yes', 3, 575, 441, 335, 262),
	array('Hanover', 'Coast', 'Yes', 2, 539, 547, 310, 316),
	array('Brandenburg', 'Land', 'No', 6, 610, 576, 335, 331),
	array('Saxony', 'Land', 'Yes', 0, 587, 619, 342, 353),
	array('Rhineland', 'Land', 'No', 0, 536, 657, 304, 381),
	array('Westphalia', 'Land', 'Yes', 0, 514, 590, 296, 340),
	array('Bavaria', 'Land', 'Yes', 0, 586, 679, 335, 391),
	array('Tyrol', 'Land', 'No', 1, 556, 738, 322, 424),
	array('Venice', 'Coast', 'Yes', 1, 587, 778, 341, 444),
	array('Vienna', 'Coast', 'Yes', 1, 640, 754, 373, 433),
	array('Croatia', 'Coast', 'No', 1, 638, 831, 371, 481),
	array('Budapest', 'Land', 'Yes', 1, 728, 772, 410, 410),
	array('Bohemia', 'Land', 'No', 1, 643, 663, 367, 375),
	array('Galicia', 'Land', 'No', 1, 808, 658, 460, 366),
	array('Transylvania', 'Land', 'No', 1, 839, 769, 467, 421),
	array('Moldavia', 'Coast', 'Yes', 0, 919, 765, 511, 417),
	array('Wallachia', 'Coast', 'Yes', 0, 880, 816, 518, 465),
	array('Bosnia', 'Coast', 'No', 5, 751, 919, 432, 486),
	array('Greece', 'Coast', 'No', 5, 791, 1045, 455, 600),
	array('Constantinople', 'Coast', 'Yes', 5, 893, 916, 513, 525),
	array('Angora', 'Coast', 'Yes', 5, 928, 1018, 568, 545),
	array('Armenia', 'Coast', 'No', 5, 1234, 919, 713, 530),
	array('Syria', 'Coast', 'No', 5, 1153, 1098, 667, 617),
	array('Egypt', 'Coast', 'Yes', 5, 1009, 1246, 583, 714),
	array('Tripolitania', 'Coast', 'Yes', 0, 775, 1228, 447, 705),
	array('Tunisia', 'Coast', 'No', 0, 481, 1071, 279, 609),
	array('Algeria', 'Coast', 'Yes', 0, 253, 1066, 206, 611),
	array('Morocco', 'Coast', 'No', 0, 50, 1060, 32, 609),
	array('Gibraltar', 'Coast', 'No', 2, 130, 969, 75, 558),
	array('Andalusia', 'Coast', 'No', 9, 181, 942, 108, 543),
	array('Andalusia (West Coast)', 'Coast', 'No', 9, 105, 922, 63, 530),
	array('Andalusia (East Coast)', 'Coast', 'No', 9, 203, 966, 121, 556),
	array('Valencia', 'Coast', 'Yes', 9, 266, 939, 141, 533),
	array('Madrid', 'Coast', 'Yes', 9, 178, 843, 112, 483),
	array('Portugal', 'Coast', 'Yes', 9, 86, 853, 56, 492),
	array('Navarre', 'Coast', 'No', 9, 200, 784, 119, 453),
	array('Catalonia', 'Coast', 'No', 9, 325, 853, 190, 490),
	array('Gascony', 'Coast', 'No', 4, 313, 741, 183, 427),
	array('Marseilles', 'Coast', 'Yes', 4, 365, 799, 239, 468),
	array('Piedmont', 'Coast', 'Yes', 0, 488, 807, 278, 450),
	array('Cisalpine Republic', 'Coast', 'Yes', 0, 550, 821, 320, 471),
	array('Papal States', 'Coast', 'Yes', 8, 562, 871, 324, 504),
	array('Papal States (West Coast)', 'Coast', 'No', 8, 568, 895, 322, 509),
	array('Papal States (East Coast)', 'Coast', 'No', 8, 592, 861, 335, 496),
	array('Apulia', 'Coast', 'No', 8, 680, 944, 351, 517),
	array('Naples', 'Coast', 'Yes', 8, 655, 1002, 378, 569),
	array('Palermo', 'Coast', 'Yes', 8, 604, 1040, 339, 594),
	array('Helvetia', 'Land', 'Yes', 0, 481, 745, 278, 422),
	array('Lorraine', 'Land', 'No', 4, 466, 652, 264, 373),
	array('Lyon', 'Land', 'Yes', 4, 390, 742, 241, 419),
	array('Paris', 'Land', 'Yes', 4, 381, 661, 221, 377),
	array('Brest', 'Coast', 'Yes', 4, 314, 664, 177, 380),
	array('Belgium', 'Coast', 'No', 4, 431, 609, 257, 351),
	array('Batavia', 'Coast', 'Yes', 0, 481, 547, 279, 313),
	array('Barents Sea', 'Sea', 'No', 0, 926, 40, 520, 23),
	array('Norwegian Sea', 'Sea', 'No', 0, 535, 147, 241, 71),
	array('Arctic Ocean', 'Sea', 'No', 0, 133, 57, 72, 37),
	array('North Atlantic Ocean', 'Sea', 'No', 0, 160, 306, 128, 159),
	array('Celtic Sea', 'Sea', 'No', 0, 209, 555, 126, 310),
	array('Bay of Biscay', 'Sea', 'No', 0, 235, 693, 141, 427),
	array('English Channel', 'Sea', 'No', 0, 286, 603, 166, 347),
	array('North Sea', 'Sea', 'No', 0, 433, 471, 253, 275),
	array('Skagerrak', 'Sea', 'No', 0, 500, 421, 335, 232),
	array('Baltic Sea', 'Sea', 'No', 0, 721, 475, 415, 281),
	array('Gulf of Bothnia', 'Sea', 'No', 0, 748, 387, 433, 224),
	array('Atlantic', 'Sea', 'No', 0, 54, 654, 25, 427),
	array('Western Mediterranean', 'Sea', 'No', 0, 290, 990, 150, 570),
	array('Balearic Sea', 'Sea', 'No', 0, 394, 955, 216, 551),
	array('Gulf of Lyon', 'Sea', 'No', 0, 448, 892, 229, 503),
	array('Tyrrhenian Sea', 'Sea', 'No', 0, 584, 970, 304, 538),
	array('Central Mediterranean', 'Sea', 'No', 0, 614, 1141, 337, 648),
	array('Ionian Sea', 'Sea', 'No', 0, 712, 1031, 410, 580),
	array('Adriatic Sea', 'Sea', 'No', 0, 638, 888, 402, 533),
	array('Eastern Mediterranean', 'Sea', 'No', 0, 911, 1162, 510, 667),
	array('Aegean Sea', 'Sea', 'No', 0, 839, 993, 490, 576),
	array('Black Sea', 'Sea', 'No', 0, 989, 855, 567, 491)
);

foreach($territoryRawData as $territoryRawRow)
{
	list($name, $type, $supply, $countryID, $x, $y, $sx, $sy)=$territoryRawRow;
	new InstallTerritory($name, $type, $supply, $countryID, $x, $y, $sx, $sy);
}
unset($territoryRawData);

$bordersRawData=array(
	array('Edinburgh','Liverpool','Yes','Yes'),
	array('Edinburgh','Ireland','Yes','Yes'),
	array('Edinburgh','Yorkshire','Yes','Yes'),
	array('Edinburgh','North Atlantic Ocean','Yes','No'),
	array('Edinburgh','Celtic Sea','Yes','No'),
	array('Edinburgh','North Sea','Yes','No'),
	array('Liverpool','Wales','Yes','Yes'),
	array('Liverpool','Yorkshire','No','Yes'),
	array('Liverpool','Celtic Sea','Yes','No'),
	array('Ireland','North Atlantic Ocean','Yes','No'),
	array('Ireland','Celtic Sea','Yes','No'),
	array('Wales','London','Yes','Yes'),
	array('Wales','Yorkshire','No','Yes'),
	array('Wales','Celtic Sea','Yes','No'),
	array('Wales','English Channel','Yes','No'),
	array('London','Yorkshire','Yes','Yes'),
	array('London','English Channel','Yes','No'),
	array('London','North Sea','Yes','No'),
	array('Iceland','Norwegian Sea','Yes','No'),
	array('Iceland','Arctic Ocean','Yes','No'),
	array('Iceland','North Atlantic Ocean','Yes','No'),
	array('Christiania','Sweden','Yes','Yes'),
	array('Christiania','Finnmark','Yes','Yes'),
	array('Christiania','Norwegian Sea','Yes','No'),
	array('Christiania','Skagerrak','Yes','No'),
	array('Sweden','Finnmark','No','Yes'),
	array('Sweden','Finland','Yes','Yes'),
	array('Sweden','Copenhagen','Yes','Yes'),
	array('Sweden','Skagerrak','Yes','No'),
	array('Sweden','Baltic Sea','Yes','No'),
	array('Sweden','Gulf of Bothnia','Yes','No'),
	array('Finnmark','Finland','No','Yes'),
	array('Finnmark','St. Petersburg','No','Yes'),
	array('Finnmark','St. Petersburg (North Coast)','Yes','No'),
	array('Finnmark','Barents Sea','Yes','No'),
	array('Finnmark','Norwegian Sea','Yes','No'),
	array('Finland','St. Petersburg','No','Yes'),
	array('Finland','St. Petersburg (South Coast)','Yes','No'),
	array('Finland','Gulf of Bothnia','Yes','No'),
	array('St. Petersburg','Urals','No','Yes'),
	array('St. Petersburg','Moscow','No','Yes'),
	array('St. Petersburg','Livonia','No','Yes'),
	array('St. Petersburg (North Coast)','Barents Sea','Yes','No'),
	array('St. Petersburg (South Coast)','Livonia','Yes','No'),
	array('St. Petersburg (South Coast)','Gulf of Bothnia','Yes','No'),
	array('Urals','Moscow','No','Yes'),
	array('Urals','Sevastopol','No','Yes'),
	array('Moscow','Sevastopol','No','Yes'),
	array('Moscow','Ukraine','No','Yes'),
	array('Moscow','Kiev','No','Yes'),
	array('Moscow','Livonia','No','Yes'),
	array('Sevastopol','Ukraine','No','Yes'),
	array('Sevastopol','Moldavia','Yes','Yes'),
	array('Sevastopol','Armenia','Yes','Yes'),
	array('Sevastopol','Black Sea','Yes','No'),
	array('Ukraine','Kiev','No','Yes'),
	array('Ukraine','Galicia','No','Yes'),
	array('Ukraine','Moldavia','No','Yes'),
	array('Kiev','Livonia','No','Yes'),
	array('Kiev','Poland','No','Yes'),
	array('Kiev','Galicia','No','Yes'),
	array('Livonia','Konigsberg','Yes','Yes'),
	array('Livonia','Poland','No','Yes'),
	array('Livonia','Baltic Sea','Yes','No'),
	array('Livonia','Gulf of Bothnia','Yes','No'),
	array('Konigsberg','Poland','No','Yes'),
	array('Konigsberg','Breslau','No','Yes'),
	array('Konigsberg','Berlin','Yes','Yes'),
	array('Konigsberg','Baltic Sea','Yes','No'),
	array('Yorkshire','North Sea','Yes','No'),
	array('Poland','Breslau','No','Yes'),
	array('Poland','Galicia','No','Yes'),
	array('Breslau','Berlin','No','Yes'),
	array('Breslau','Saxony','No','Yes'),
	array('Breslau','Bohemia','No','Yes'),
	array('Berlin','Mecklenburg','Yes','Yes'),
	array('Berlin','Brandenburg','No','Yes'),
	array('Berlin','Saxony','No','Yes'),
	array('Berlin','Baltic Sea','Yes','No'),
	array('Mecklenburg','Schleswig','No','Yes'),
	array('Mecklenburg','Schleswig (East Coast)','Yes','No'),
	array('Mecklenburg','Hanover','No','Yes'),
	array('Mecklenburg','Brandenburg','No','Yes'),
	array('Mecklenburg','Baltic Sea','Yes','No'),
	array('Schleswig','Copenhagen','No','Yes'),
	array('Schleswig','Hanover','No','Yes'),
	array('Schleswig (East Coast)','Copenhagen','Yes','No'),
	array('Schleswig (East Coast)','Baltic Sea','Yes','No'),
	array('Schleswig (West Coast)','Copenhagen','Yes','No'),
	array('Schleswig (West Coast)','Hanover','Yes','No'),
	array('Schleswig (West Coast)','North Sea','Yes','No'),
	array('Copenhagen','Skagerrak','Yes','No'),
	array('Copenhagen','Baltic Sea','Yes','No'),
	array('Hanover','Brandenburg','No','Yes'),
	array('Hanover','Westphalia','No','Yes'),
	array('Hanover','North Sea','Yes','No'),
	array('Brandenburg','Saxony','No','Yes'),
	array('Brandenburg','Westphalia','No','Yes'),
	array('Saxony','Rhineland','No','Yes'),
	array('Saxony','Westphalia','No','Yes'),
	array('Saxony','Bavaria','No','Yes'),
	array('Saxony','Bohemia','No','Yes'),
	array('Rhineland','Westphalia','No','Yes'),
	array('Rhineland','Bavaria','No','Yes'),
	array('Rhineland','Tyrol','No','Yes'),
	array('Rhineland','Helvetia','No','Yes'),
	array('Rhineland','Lorraine','No','Yes'),
	array('Westphalia','Lorraine','No','Yes'),
	array('Westphalia','Belgium','No','Yes'),
	array('Westphalia','Batavia','No','Yes'),
	array('Westphalia','North Sea','Yes','No'),
	array('Bavaria','Tyrol','No','Yes'),
	array('Bavaria','Vienna','No','Yes'),
	array('Bavaria','Bohemia','No','Yes'),
	array('Tyrol','Venice','No','Yes'),
	array('Tyrol','Vienna','No','Yes'),
	array('Tyrol','Cisalpine Republic','No','Yes'),
	array('Tyrol','Helvetia','No','Yes'),
	array('Venice','Vienna','Yes','Yes'),
	array('Venice','Cisalpine Republic','Yes','Yes'),
	array('Venice','Adriatic Sea','Yes','No'),
	array('Vienna','Croatia','Yes','Yes'),
	array('Vienna','Budapest','No','Yes'),
	array('Vienna','Bohemia','No','Yes'),
	array('Vienna','Adriatic Sea','Yes','No'),
	array('Croatia','Budapest','No','Yes'),
	array('Croatia','Bosnia','Yes','Yes'),
	array('Croatia','Adriatic Sea','Yes','No'),
	array('Budapest','Bohemia','No','Yes'),
	array('Budapest','Galicia','No','Yes'),
	array('Budapest','Transylvania','No','Yes'),
	array('Budapest','Bosnia','No','Yes'),
	array('Bohemia','Galicia','No','Yes'),
	array('Galicia','Transylvania','No','Yes'),
	array('Galicia','Moldavia','No','Yes'),
	array('Transylvania','Moldavia','No','Yes'),
	array('Transylvania','Wallachia','No','Yes'),
	array('Transylvania','Bosnia','No','Yes'),
	array('Moldavia','Wallachia','Yes','Yes'),
	array('Moldavia','Black Sea','Yes','No'),
	array('Wallachia','Bosnia','No','Yes'),
	array('Wallachia','Constantinople','Yes','Yes'),
	array('Wallachia','Black Sea','Yes','No'),
	array('Bosnia','Greece','Yes','Yes'),
	array('Bosnia','Constantinople','No','Yes'),
	array('Bosnia','Ionian Sea','Yes','No'),
	array('Bosnia','Adriatic Sea','Yes','No'),
	array('Greece','Constantinople','Yes','Yes'),
	array('Greece','Ionian Sea','Yes','No'),
	array('Greece','Aegean Sea','Yes','No'),
	array('Constantinople','Angora','Yes','Yes'),
	array('Constantinople','Aegean Sea','Yes','No'),
	array('Constantinople','Black Sea','Yes','No'),
	array('Angora','Armenia','Yes','Yes'),
	array('Angora','Syria','Yes','Yes'),
	array('Angora','Eastern Mediterranean','Yes','No'),
	array('Angora','Aegean Sea','Yes','No'),
	array('Angora','Black Sea','Yes','No'),
	array('Armenia','Syria','No','Yes'),
	array('Armenia','Black Sea','Yes','No'),
	array('Syria','Egypt','Yes','Yes'),
	array('Syria','Eastern Mediterranean','Yes','No'),
	array('Egypt','Tripolitania','Yes','Yes'),
	array('Egypt','Eastern Mediterranean','Yes','No'),
	array('Tripolitania','Tunisia','Yes','Yes'),
	array('Tripolitania','Central Mediterranean','Yes','No'),
	array('Tripolitania','Eastern Mediterranean','Yes','No'),
	array('Tunisia','Algeria','Yes','Yes'),
	array('Tunisia','Western Mediterranean','Yes','No'),
	array('Tunisia','Tyrrhenian Sea','Yes','No'),
	array('Tunisia','Central Mediterranean','Yes','No'),
	array('Algeria','Morocco','Yes','Yes'),
	array('Algeria','Western Mediterranean','Yes','No'),
	array('Morocco','Gibraltar','Yes','No'),
	array('Morocco','Atlantic','Yes','No'),
	array('Morocco','Western Mediterranean','Yes','No'),
	array('Gibraltar','Andalusia','No','Yes'),
	array('Gibraltar','Andalusia (West Coast)','Yes','No'),
	array('Gibraltar','Andalusia (East Coast)','Yes','No'),
	array('Gibraltar','Atlantic','Yes','No'),
	array('Gibraltar','Western Mediterranean','Yes','No'),
	array('Andalusia','Valencia','No','Yes'),
	array('Andalusia','Madrid','No','Yes'),
	array('Andalusia','Portugal','No','Yes'),
	array('Andalusia (West Coast)','Portugal','Yes','No'),
	array('Andalusia (West Coast)','Atlantic','Yes','No'),
	array('Andalusia (East Coast)','Valencia','Yes','No'),
	array('Andalusia (East Coast)','Western Mediterranean','Yes','No'),
	array('Valencia','Madrid','No','Yes'),
	array('Valencia','Catalonia','Yes','Yes'),
	array('Valencia','Western Mediterranean','Yes','No'),
	array('Valencia','Balearic Sea','Yes','No'),
	array('Madrid','Portugal','Yes','Yes'),
	array('Madrid','Navarre','Yes','Yes'),
	array('Madrid','Catalonia','No','Yes'),
	array('Madrid','Atlantic','Yes','No'),
	array('Portugal','Atlantic','Yes','No'),
	array('Navarre','Catalonia','No','Yes'),
	array('Navarre','Gascony','Yes','Yes'),
	array('Navarre','Bay of Biscay','Yes','No'),
	array('Navarre','Atlantic','Yes','No'),
	array('Catalonia','Gascony','No','Yes'),
	array('Catalonia','Marseilles','Yes','Yes'),
	array('Catalonia','Balearic Sea','Yes','No'),
	array('Catalonia','Gulf of Lyon','Yes','No'),
	array('Gascony','Marseilles','No','Yes'),
	array('Gascony','Lyon','No','Yes'),
	array('Gascony','Brest','Yes','Yes'),
	array('Gascony','Bay of Biscay','Yes','No'),
	array('Marseilles','Piedmont','Yes','Yes'),
	array('Marseilles','Lyon','No','Yes'),
	array('Marseilles','Gulf of Lyon','Yes','No'),
	array('Piedmont','Cisalpine Republic','No','Yes'),
	array('Piedmont','Papal States','No','Yes'),
	array('Piedmont','Papal States (West Coast)','Yes','No'),
	array('Piedmont','Helvetia','No','Yes'),
	array('Piedmont','Lyon','No','Yes'),
	array('Piedmont','Gulf of Lyon','Yes','No'),
	array('Piedmont','Tyrrhenian Sea','Yes','No'),
	array('Cisalpine Republic','Papal States','No','Yes'),
	array('Cisalpine Republic','Papal States (East Coast)','Yes','No'),
	array('Cisalpine Republic','Helvetia','No','Yes'),
	array('Cisalpine Republic','Adriatic Sea','Yes','No'),
	array('Papal States','Apulia','No','Yes'),
	array('Papal States','Naples','No','Yes'),
	array('Papal States (West Coast)','Naples','Yes','No'),
	array('Papal States (West Coast)','Tyrrhenian Sea','Yes','No'),
	array('Papal States (East Coast)','Apulia','Yes','No'),
	array('Papal States (East Coast)','Adriatic Sea','Yes','No'),
	array('Apulia','Naples','Yes','Yes'),
	array('Apulia','Ionian Sea','Yes','No'),
	array('Apulia','Adriatic Sea','Yes','No'),
	array('Naples','Palermo','Yes','Yes'),
	array('Naples','Tyrrhenian Sea','Yes','No'),
	array('Naples','Ionian Sea','Yes','No'),
	array('Palermo','Tyrrhenian Sea','Yes','No'),
	array('Palermo','Central Mediterranean','Yes','No'),
	array('Palermo','Ionian Sea','Yes','No'),
	array('Helvetia','Lorraine','No','Yes'),
	array('Helvetia','Lyon','No','Yes'),
	array('Lorraine','Lyon','No','Yes'),
	array('Lorraine','Paris','No','Yes'),
	array('Lorraine','Belgium','No','Yes'),
	array('Lyon','Paris','No','Yes'),
	array('Lyon','Brest','No','Yes'),
	array('Paris','Brest','No','Yes'),
	array('Paris','Belgium','No','Yes'),
	array('Brest','Belgium','Yes','Yes'),
	array('Brest','Bay of Biscay','Yes','No'),
	array('Brest','English Channel','Yes','No'),
	array('Belgium','Batavia','Yes','Yes'),
	array('Belgium','English Channel','Yes','No'),
	array('Belgium','North Sea','Yes','No'),
	array('Batavia','North Sea','Yes','No'),
	array('Barents Sea','Norwegian Sea','Yes','No'),
	array('Norwegian Sea','Arctic Ocean','Yes','No'),
	array('Norwegian Sea','North Atlantic Ocean','Yes','No'),
	array('Norwegian Sea','North Sea','Yes','No'),
	array('Norwegian Sea','Skagerrak','Yes','No'),
	array('Arctic Ocean','North Atlantic Ocean','Yes','No'),
	array('North Atlantic Ocean','Celtic Sea','Yes','No'),
	array('North Atlantic Ocean','North Sea','Yes','No'),
	array('North Atlantic Ocean','Atlantic','Yes','No'),
	array('Celtic Sea','Bay of Biscay','Yes','No'),
	array('Celtic Sea','English Channel','Yes','No'),
	array('Celtic Sea','Atlantic','Yes','No'),
	array('Bay of Biscay','English Channel','Yes','No'),
	array('Bay of Biscay','Atlantic','Yes','No'),
	array('English Channel','North Sea','Yes','No'),
	array('North Sea','Skagerrak','Yes','No'),
	array('Baltic Sea','Gulf of Bothnia','Yes','No'),
	array('Western Mediterranean','Balearic Sea','Yes','No'),
	array('Western Mediterranean','Tyrrhenian Sea','Yes','No'),
	array('Balearic Sea','Gulf of Lyon','Yes','No'),
	array('Balearic Sea','Tyrrhenian Sea','Yes','No'),
	array('Gulf of Lyon','Tyrrhenian Sea','Yes','No'),
	array('Tyrrhenian Sea','Central Mediterranean','Yes','No'),
	array('Tyrrhenian Sea','Ionian Sea','Yes','No'),
	array('Central Mediterranean','Ionian Sea','Yes','No'),
	array('Central Mediterranean','Eastern Mediterranean','Yes','No'),
	array('Ionian Sea','Adriatic Sea','Yes','No'),
	array('Ionian Sea','Eastern Mediterranean','Yes','No'),
	array('Ionian Sea','Aegean Sea','Yes','No'),
	array('Eastern Mediterranean','Aegean Sea','Yes','No')
);

foreach($bordersRawData as $borderRawRow)
{
	list($from, $to, $fleets, $armies)=$borderRawRow;
	InstallTerritory::$Territories[$to]  ->addBorder(InstallTerritory::$Territories[$from],$fleets,$armies);
}
unset($bordersRawData);

InstallTerritory::runSQL($this->mapID);
InstallCache::terrJSON($this->territoriesJSONFile(),$this->mapID);
?>
