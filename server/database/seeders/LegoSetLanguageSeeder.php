<?php

namespace Database\Seeders;

use App\Models\LegoSetsLanguage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LegoSetLanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $translations = [
                [
                    'set_number' => 60194,
                    'language' => "en",
                    'name' => "Arctic Scout Truck",
                    'description' => "Pack up the LEGO® City 60194 Arctic Scout Truck with gear and get ready to investigate the ice! Collect samples for analysis in the truck’s lab as you explore the site on the snow bike. Oohh, check out the cool ice wall and that mysterious cave… what could be inside? Look out for the polar bear!",
                ],
                [
                    'set_number' => 60194,
                    'language' => "nl",
                    'name' => "Poolonderzoekstruck",
                    'description' => "Laad de LEGO® City 60194 Poolonderzoekstruck vol spullen en ga op pad om onderzoek te doen in het ijs! Verzamel tijdens het verkennen van de locatie monsters om in het lab van de truck te analyseren. Ooh, kijk de coole ijswand en die mysterieuze grot eens... wat zou er in die grot te zien zijn? Pas op, een ijsbeer! Fluit om de sledehond te roepen. Het is tijd om terug naar het basiskamp te gaan!",
                ],
                [
                    'set_number' => 60022,
                    'language' => "en",
                    'name' => "Cargo Terminal",
                    'description' => "Get busy loading the cargo at the LEGO City® Cargo Terminal! Open the cargo plane doors and help the workers to move the conveyor belt into position. Load the boxes onto the belt and push them into the plane! Use the ATV and the forklift’s adjustable forks to pick up the gold bars and drive them through the cargo plane’s opening tail. Then, fill up the tanks with the Octan™ truck, radio the control tower and taxi off for another delivery! Includes 5 minifigures with accessories: pilot, controller and 3 workers.",
                ],
                [
                    'set_number' => 60022,
                    'language' => "nl",
                    'name' => "Vrachtterminal",
                    'description' => "Verwerk de goederen in de LEGO City® vrachtterminal! Open de deuren van het vrachtvliegtuig zodat de arbeiders de transportband kunnen klaarzetten. Zet de dozen op de transportband en duw ze het vliegtuig in! Met de ATV en de vorkheftruck breng je de goudstaven door de open achterdeur aan boord van het vrachtvliegtuig. Vul de tanks met de Octan™ tankwagen, vraag toestemming om te starten aan de verkeersleiding en rol naar de startbaan! Inclusief 5 minifiguren met accessoires: piloot, verkeersleider en 3 arbeiders.",
                ],
                [
                    'set_number' => 3178,
                    'language' => "en",
                    'name' => "Seaplane",
                    'description' => "From sky to sea, this Seaplane goes anywhere!

                    Fuel up and fly to remote locations in this powerful, twin-propeller Seaplane — prepare to land on the open ocean!",
                ],
                [
                    'set_number' => 3178,
                    'language' => "nl",
                    'name' => "Watervliegtuig",
                    'description' => "Van lucht naar zee, dit watervliegtuig gaat overal naartoe!

                    Tank en vlieg naar afgelegen locaties in dit krachtige watervliegtuig met twee propellers - bereid je voor om te landen op de open oceaan!",
                ],
                [
                    'set_number' => 60090,
                    'language' => "en",
                    'name' => "Deep Sea Scuba Scooter",
                    'description' => "Join the scuba diver on a deep-sea exploration for lost treasure with the Deep Sea Scuba Scooter! Steer the awesome scuba scooter through the clear water and down to the depths. Then use the robotic arms to grab the precious crystal, but watch out for the giant octopus lurking in the seaweed! It also has a crystal gripped tightly in one of its long tentacles! Can you retrieve the precious crystal? Includes a scuba diver minifigure.",
                ],
                [
                    'set_number' => 60090,
                    'language' => "nl",
                    'name' => "Diepzee Duik Scooter",
                    'description' => "Ga met deze duiker op ontdekkingsreis in de diepe zee en jaag op verborgen schatten met de Diepzee Duik Scooter! Stuur de fantastische Diepzee Duik Scooter door het kristalheldere water naar steeds grotere dieptes. Gebruik de robotarmen op de scooter om het kostbare kristal te pakken maar pas op voor die reuzeninktvis die achter het zeewier op de loer ligt! De inktvis houdt een ander kristal vast in één van zijn lange tentakels! Kan het kostbare kristal naar de oppervlakte worden gebracht? Inclusief duiker minifiguur.",
                ],
                [
                    'set_number' => 60072,
                    'language' => "en",
                    'name' => "Demolition Starter Set",
                    'description' => "Join the demolition experts! The demolition of a derelict building is near completion, and with only a small part of the bathroom remaining it’s time to finish off the job! Operate the powerful jackhammer, swing the heavy sledgehammer, then jump aboard the awesome front loader and scoop up the rubble and remaining debris. What a busy day! Includes 4 minifigures with assorted accessories: 3 demolition workers and a foreman.",
                ],
                [
                    'set_number' => 60072,
                    'language' => "nl",
                    'name' => "Sloop startset",
                    'description' => "Aan het werk met de sloopexperts! De afbraak van het oude gebouw is bijna voltooid: er staat nog maar een klein stukje van de badkamer overeind en dat gaat nu verdwijnen! Start de sterke breekhamer, sla de muren omver met de voorhamer en voer het puin weg in de laadbak van de stoere graafmachine. Dat klusje zit er ook weer op! Inclusief 4 minifiguren met diverse accessoires: 3 slopers en en voorman.",
                ],
                [
                    'set_number' => 7634,
                    'language' => "en",
                    'name' => "Tractor",
                    'description' => "The fields around Lego City are hard at work: the farmer rides his strong tractor across the field and prepares the ground for planting.",
                ],
                [
                    'set_number' => 7634,
                    'language' => "nl",
                    'name' => "Tractor",
                    'description' => "Op de velden rond Lego City wordt hard gewerkt: de boer rijdt op zijn sterke tractor over de akker en maakt de grond klaar om te beplanten.",
                ],
                [
                    'set_number' => 60105,
                    'language' => "en",
                    'name' => "Fire ATV",
                    'description' => "Jump off the Fire ATV and survey the scene! Use the fire extinguisher on the back of the ATV to put out the fire. Cut through the window with the saw and inspect the ruin. Save the day and be a firefighting hero in LEGO® City!",
                ],
                [
                    'set_number' => 60105,
                    'language' => "nl",
                    'name' => "Brandweer terreinwagen",
                    'description' => "Bedenk allerlei brandweeravonturen met de LEGO® City brandweer terreinwagen. Bij deze set hoort een uitgebrand gebouwsegment met raam en een vlammenelement dat met een hendel op en neer kan worden bewogen. Inclusief brandblusser, cirkelzaag voor de brandweerman en brandweerman minifiguur.",
                ],
                [
                    'set_number' => 4205,
                    'language' => "en",
                    'name' => "Off Road Command Center",
                    'description' => "Locate the robber with the Off-Road Command Center!

                    Track down the robber with the high-tech Off-Road Command Center, then use the dinghy to catch him red-clawed with the loot!",
                ],
                [
                    'set_number' => 4205,
                    'language' => "nl",
                    'name' => "Off Road Commandocentrum",
                    'description' => "Lokaliseer de overvaller met het Off-Road Command Center!

                    Spoor de overvaller op met het high-tech Off-Road Command Center, en gebruik dan de rubberboot om hem met de buit op heterdaad te betrappen!",
                ],
                [
                    'set_number' => 60113,
                    'language' => "en",
                    'name' => "Rally Car",
                    'description' => "Hop in the LEGO® City Rally Car and buckle up! Get ready, the race is about to start. Hit the gas and go go go to cross the finish line first! Race to win in LEGO City!",
                ],
                [
                    'set_number' => 60113,
                    'language' => "nl",
                    'name' => "Rallyauto",
                    'description' => "Spring in de LEGO® City Rallyauto en maak je veiligheidsriem vast! De grote race gaat beginnen! Geef gas en schiet zo snel als je kan naar de finish! Race om te winnen in LEGO City!",
                ],
                [
                    'set_number' => 4645,
                    'language' => "en",
                    'name' => "Harbor",
                    'description' => "The LEGO® City Harbor is bursting with activity!

                    Learn the ways of working by the water with the Harbor building set’s 3 huge vehicles, 4 minifigures and grain-loading conveyor belt!",
                ],
                [
                    'set_number' => 4645,
                    'language' => "nl",
                    'name' => "Haven",
                    'description' => "De LEGO® City Haven barst van de activiteiten!

                    Leer de manieren van werken aan het water met de 3 enorme voertuigen, 4 minifiguren en de graanlaadband van de Harbor bouwset!",
                ],
                [
                    'set_number' => 60162,
                    'language' => "en",
                    'name' => "Jungle Air Drop Helicopter",
                    'description' => "Gear up to tackle the LEGO® City jungle with the Jungle Air Drop Helicopter! Use the work tower crane to unload the pallet transporter from the riverboat, and then haul a load of supplies out to the site with the clamp system on the helicopter. Hop behind the wheel of the 4x4 truck to pull the temple statue upright and look behind it. There's always something new to find in the LEGO City jungle!",
                ],
                [
                    'set_number' => 60162,
                    'language' => "en",
                    'name' => "Jungle helikopterdropping",
                    'description' => "Ga op onderzoek uit in de LEGO® City jungle met deze zware helikopter! Gebruik de kraan op de toren om de palletwagen van de rivierboot af te hijsen en klem de voorraden vast onder de helikopter om ze naar de onderzoekslocatie te vervoeren. Spring achter het stuur van de 4x4 truck om het tempelbeeld overeind te trekken en te zien wat erachter ligt. Er is altijd wel iets nieuws te ontdekken in de LEGO City jungle!",
                ],
                [
                    'set_number' => 60167,
                    'language' => "en",
                    'name' => "Coast Guard Head Quarters",
                    'description' => "Grab your binoculars and keep watch for trouble! Wait, a flare just went off out on the water, better check it out with the helicopter. There’s a stranded sailor hanging on the buoy, call out the coast guard ship to go get him. Oh no, there’s a shark and an octopus circling the buoy! Rescue the sailor before they get any closer! Take him to the ship for a check up before you head home!",
                ],
                [
                    'set_number' => 60167,
                    'language' => "nl",
                    'name' => "Kustwacht hoofdkwartier",
                    'description' => "Pak je verrekijker en speur de horizon af, op zoek naar noodsituaties. Kijk, daar op het water gaat een noodsignaal de lucht in! Ga eropaf met de helikopter. Er ligt een zeiler in het water die zich vastklampt aan een boei. Roep de hulp in van de kustwachtboot. Oh nee! Een haai en een octopus zwemmen rond de boei! Red de zeiler voordat ze te dichtbij komen. Trek hem aan boord en onderzoek of hij in orde is voordat je terugvaart!",
                ],
                [
                    'set_number' => 30151,
                    'language' => "en",
                    'name' => "Mining Dozer",
                    'description' => "Get ready for high-speed action with the LEGO set 30151 - Mining Dozer! With this set, you can build a powerful mining dozer complete with moving tracks and a working bulldozer blade. Use the dozer to move rocks and dirt and uncover hidden treasures. The set includes one minifigure with mining gear to help you on your excavation journey. With 32 pieces, this set is perfect for young builders who love construction and mining vehicles. So gear up and start mining with the LEGO Mining Dozer set!",
                ],
                [
                    'set_number' => 30151,
                    'language' => "nl",
                    'name' => "Mijnbouwbulldozer",
                    'description' => "Maak je klaar voor snelle actie met de LEGO set 30151 - Mijnbouwbulldozer! Met deze set kun je een krachtige mijnbouwbulldozer bouwen, compleet met bewegende rupsbanden en een werkend bulldozerblad. Gebruik de bulldozer om rotsen en vuil te verplaatsen en verborgen schatten bloot te leggen. De set bevat één minifiguur met mijnbouwuitrusting om je te helpen op je graafavontuur. Met 32 onderdelen is deze set perfect voor jonge bouwers die van bouw- en mijnbouwvoertuigen houden. Dus maak je klaar en begin met mijnen met de LEGO Mijnbouwbulldozer-set!",
                ],
                [
                    'set_number' => 7498,
                    'language' => "en",
                    'name' => "Police Station",
                    'description' => "Stop the prisoners from escaping the police station through the pipe drain! They won't get far on foot. Use the police car to chase them down and transport them back to prison in the police van. Help keep LEGO City safe with this feature-packed set!",
                ],
                [
                    'set_number' => 7498,
                    'language' => "nl",
                    'name' => "Politiebureau",
                    'description' => "Stop de gevangenen die uit het politiebureau ontsnappen via de afvoerpijp! Te voet komen ze niet ver. Gebruik de politieauto om ze te achtervolgen en vervoer ze terug naar de gevangenis in het politiebusje. Help LEGO City veilig te houden met deze set boordevol functies!",
                ],
                [
                    'set_number' => 60126,
                    'language' => "en",
                    'name' => "Tire Escape",
                    'description' => "Patrol the waters of LEGO® City on the police water scooter! Respond to the call that a crook is paddling away on a tire. Race after him and catch him before he gets away, then slap the handcuffs on him and toss him back into lockup on Prison Island. Help keep the city safe!",
                ],
                [
                    'set_number' => 60126,
                    'language' => "nl",
                    'name' => "Band ontsnapping",
                    'description' => "Patrouilleer op het water rond LEGO® City op je politiewaterscooter! Reageer op een oproep: een boef peddelt weg in een grote autoband. Race achter hem aan en sla hem in de boeien, en breng hem snel terug naar zijn cel op het gevangeniseiland. Help de stad veilig te houden!",
                ],
                [
                    'set_number' => 3368,
                    'language' => "en",
                    'name' => "Space Center",
                    'description' => "Send the LEGO® City space explorers on a mission to Mars!

                    Start the countdown to out-of-this-world fun as you send a super crew of 4 LEGO® City space explorers on an exciting mission to Mars!",
                ],
                [
                    'set_number' => 3368,
                    'language' => "nl",
                    'name' => "Ruimte Centrum",
                    'description' => "Stuur de LEGO® City ruimteverkenners op een missie naar Mars!

                    Begin met aftellen naar buitenaards plezier als je een supercrew van 4 LEGO® City ruimteverkenners op een spannende missie naar Mars stuurt!",
                ],
                [
                    'set_number' => 60067,
                    'language' => "en",
                    'name' => "Helicopter Pursuit",
                    'description' => "Join the high-speed pursuit! Stop the crook from escaping in her stolen speedboat. Jump aboard the powerful police helicopter and give chase! Thunder over the alligator infested swamp at breakneck speed and locate the fleeing crook. Lower the policeman down onto the fast-moving speedboat using the rope. Oh no… double trouble! Look out for the huge, snappy alligator lurking beneath the water! Includes 3 minifigures with assorted accessories: a pilot, a police officer and a crook.",
                ],
                [
                    'set_number' => 60067,
                    'language' => "nl",
                    'name' => "Helikopter achtervolging",
                    'description' => "In volle vaart achter de boeven aan! Stop de boef die er vandoor gaat in de gestolen speedboot. Spring aan boord van de sterke politiehelikopter en zet de achtervolging in! Vlieg in volle vaart over het moeras vol alligators heen en probeer de vluchtende boef in het oog te krijgen. Laat de politieagent aan het touw omlaag zakken naar de snel varende speedboot. Oeps... een nieuw probleem! Kijk uit voor de grote, gevaarlijke alligator die in het water ligt! Inclusief 3 minifiguren met diverse accessoires: een piloot, een politieagent en een boef.",
                ],
                [
                    'set_number' => 60097,
                    'language' => "en",
                    'name' => "City Square",
                    'description' => "It’s buzzing with activity at the City Square! Park your bike at the cozy coffee bar, hop aboard the awesome news helicopter and take to the skies for a bird’s-eye view. When you’re done flying, call by the LEGO® Store where a new delivery has just arrived. Help the driver unload the boxes, place them on the handcart and wheel them into the store. Then check out the cool cars for sale at the dealership showrooms. Help the mechanic operate the car lift and fit a new set of sporty alloy rims. There’s just time to buy a hotdog and a newspaper for the journey home, but watch out for the pizza deliveryman on his speedy scooter as you head for the tram stop! Load your bike into the bike compartment, take a seat and watch the world go by as you travel through the LEGO City streets. What an exciting day! Includes 12 minifigures with assorted accessories: a tram driver, helicopter pilot, coffee shop saleswoman, pizza deliveryman, car saleswoman, mechanic, tow truck driver, hotdog salesman, LEGO sales person, LEGO delivery driver, a girl and a boy. Also includes 2 LEGO store statues.",
                ],
                [
                    'set_number' => 60097,
                    'language' => "nl",
                    'name' => "Stadsplein",
                    'description' => "Het is een gezellige drukte op het stadsplein! Stal de fiets bij de koffiebar, zet je minifiguur aan boord van de fantastische nieuws-helikopter en ontdek de stad vanuit de lucht. Nadat je weer bent geland, kun je de nieuwe producten gaan bekijken in de LEGO® Winkel. De vrachtwagenchauffeur laadt de dozen uit, zet ze op het karretje en rijdt ermee de winkel binnen. We kunnen ook gaan kijken naar de prachtige auto's in de showroom van de autodealer. De monteur zet een auto op de garagebrug om er nieuwe, sportieve velgen op te kunnen monteren. Op weg naar de tramhalte hebben we nog tijd om een hotdog en een krant te kopen. Maar pas op voor de pizza-bezorger op zijn snelle scooter! Zet de fiets in het speciale gedeelte van de tramwagen en kijk door het raam naar alle drukte in de straten van LEGO City. Wat een heerlijke dag! Inclusief 12 minifiguren met diverse accessoires: trambestuurder, helikopterpiloot, café-verkoopster, pizzabezorger, auto-verkoopster, monteur, sleepwagenbestuurder, hotdog-verkoper, 2 LEGO winkelmedewerkers, LEGO vrachtwagenchauffeur, jongen en meisje. Inclusief 2 LEGO winkel 'standbeelden'.",
                ],
                [
                    'set_number' => 7638,
                    'language' => "en",
                    'name' => "Tow Truck",
                    'description' => "Get ready for high-speed racing with the LEGO set 7638 - Tow Truck! With this set, you can build a powerful tow truck complete with a working crane and winch. Use the tow truck to rescue stranded vehicles and clear the roads for other racers. The set includes two minifigures, a tow truck driver, and a race car driver, to create exciting race scenarios. With 129 pieces, this set is perfect for young builders who love cars and racing. So gear up and join the race with the LEGO Tow Truck set!",
                ],
                [
                    'set_number' => 7638,
                    'language' => "nl",
                    'name' => "Takelwagen",
                    'description' => "Maak je klaar voor snelle autoraces met de LEGO set 7638 - Takelwagen! Met deze set kun je een krachtige takelwagen bouwen, compleet met een werkende kraan en lier. Gebruik de takelwagen om gestrande voertuigen te redden en de wegen vrij te maken voor andere racers. De set bevat twee minifiguren, een takelwagenchauffeur en een autocoureur, om spannende race-scenario's te creëren. Met 129 onderdelen is deze set perfect voor jonge bouwers die van auto's en racen houden. Dus maak je klaar en doe mee aan de race met de LEGO Takelwagen-set!",
                ],
                [
                    'set_number' => 7731,
                    'language' => "en",
                    'name' => "Mail Van",
                    'description' => "Get ready for a thrilling police chase with the LEGO set 7731 - Mail Van! With this set, you can build a mail van and a police car, complete with moving wheels and detailed designs. Chase the mail van down and capture the robbers with the police car's working siren and light. The set includes three minifigures, a mailman, and two robbers, to create exciting crime scenes. With 175 pieces, this set is perfect for young builders who love police and chase scenarios. So gear up and catch the bad guys with the LEGO Mail Van set!",
                ],
                [
                    'set_number' => 7731,
                    'language' => "nl",
                    'name' => "Postwagen",
                    'description' => "Maak je klaar voor een spannende politie-achtervolging met de LEGO set 7731 - Postwagen! Met deze set kun je een postwagen en een politieauto bouwen, compleet met bewegende wielen en gedetailleerde ontwerpen. Achtervolg de postwagen en pak de overvallers met de werkende sirene en licht van de politieauto. De set bevat drie minifiguren, een postbode en twee overvallers, om spannende misdaadscènes te creëren. Met 175 onderdelen is deze set perfect voor jonge bouwers die van politie- en achtervolgingsscenario's houden. Dus maak je klaar en pak de boeven met de LEGO Postwagen-set!",
                ],
                [
                    'set_number' => 75021,
                    'language' => "en",
                    'name' => "Republic Gunship™",
                    'description' => "Race to Geonosis™ in the awesome LEGO® Star Wars™ Republic Gunship™ to rescue Obi-Wan Kenobi, Anakin Skywalker and Padmé Amidala before they’re overpowered by 2 Super Battle Droids™! Aim the 4 ball gun turrets with minifigure cockpit, then open the front compartment to grab the flick missiles and restock the 8 top-mounted launchers! Open the side and rear doors to deploy the swoop bike! Use the lifting handle for easier flying-action role-play! Includes 7 minifigures with weapons: Obi-Wan Kenobi, Anakin Skywalker, Padmé Amidala, Clone Trooper™ Captain, Clone Trooper and 2 Super Battle Droids.",
                ],
                [
                    'set_number' => 75021,
                    'language' => "nl",
                    'name' => "Republic Gunship™",
                    'description' => "Race naar Geonosis™ in dit machtige LEGO® Star Wars™ Republic Gunship™ en red Obi-Wan Kenobi, Anakin Skywalker en Padmé Amidala die worden aangevallen door 2 Super Battle Droids™! Bestook de vijand vanuit de 4 ronde geschutskoepels. In het voorste compartiment vind je nieuwe raketten om in de 8 lanceerbuizen op de bovenkant te laden! Maak het zij- en achterluik open en lanceer de swoop bike! Met stevig handvat waaraan het kan worden opgetild! Inclusief 7 minifiguren met wapens: Obi-Wan Kenobi, Anakin Skywalker, Padmé Amidala, Clone Trooper™ kapitein, Clone Trooper en 2 Super Battle Droids.",
                ],
                [
                    'set_number' => 75035,
                    'language' => "en",
                    'name' => "Kashyyyk Troopers™",
                    'description' => "Recreate an action-packed scene from Star Wars: Episode III Revenge of the Sith with the Kashyyyk Troopers™ battle pack. Arm the troopers with new blasters, hop on the swamp speeder with rotating engine and get ready to take a stand against the invading Droid Army. Includes 4 minifigures with weapons: 2 41st Elite Corps Troopers™ and 2 Kashyyyk Clone Troopers™.",
                ],
                [
                    'set_number' => 75035,
                    'language' => "nl",
                    'name' => "Kashyyyk Troopers™",
                    'description' => "Speel een beroemde scène vol actie na uit de film Star Wars: Episode III Revenge of the Sith, met het Kashyyyk Troopers™ battle pack. Bewapen de troopers met de nieuwe blasters, zet ze aan boord van de swamp speeder met draaibare motor en hou je gereed om de invasie van het Droid leger af te weren. Inclusief 4 minifiguren met wapens: 2 41st Elite Corps Troopers™ en 2 Kashyyyk Clone Troopers™.",
                ],
                [
                    'set_number' => 75199,
                    'language' => "en",
                    'name' => "General Grievous' Combat Speeder",
                    'description' => "Set off on a fast-paced mission against Master Windu aboard General Grievous’ Combat Speeder! Stand him by the controls, load the sp ring-loaded shooters and speed into action. When you locate the Jedi Master, grab the Lightsabers underneath and race into an exciting Lightsaber duel!",
                ],
                [
                    'set_number' => 75199,
                    'language' => "nl",
                    'name' => "Gevechtsspeeder van General Grievous",
                    'description' => "Doe mee aan een snelle missie tegen Mace Windu aan boord van de gevechtsspeeder van General Grievous. Zet hem achter de bedieningsel ementen, laad de wapens met veermechanisme en laat de actie maar komen! Als je de Jedimeester hebt gevonden, pak je de lichtzwaarden en ga je een spannend lichtzwaardduel aan!",
                ],
                [
                    'set_number' => 75028,
                    'language' => "en",
                    'name' => "Clone Turbo Tank™",
                    'description' => "Enter the mini world of LEGO® Star Wars™ microfighters with the Clone Turbo Tank™. This cool mini model has moving wheels, 2 flick missiles and a mini cockpit on top for the Clone Trooper™ to sit in. Prepare to enter micro-sized battle! Includes a Clone Trooper minifigure with a blaster.",
                ],
                [
                    'set_number' => 75028,
                    'language' => "nl",
                    'name' => "Clone Turbo Tank™",
                    'description' => "Maak kennis met een miniwereld van LEGO® Star Wars™ microfighters, met de Clone Turbo Tank™. Dit coole mini-model heeft beweegbare wielen, 2 raketten en een mini cockpit waar een Clone Trooper™ in kan zitten. Maak je gereed voor een veldslag op micro-schaal! Inclusief Clone Trooper minifiguur met blaster.",
                ],
                [
                    'set_number' => 75325,
                    'language' => "en",
                    'name' => "The Mandalorian's N-1 Starfighter™",
                    'description' => "Tatooine tales from Star Wars: The Book of Boba Fett come to life for young builders with this LEGO® brick model of The Mandalorian’s N-1 Starfighter (75325). It has a minifigure cockpit, passenger space for Grogu, a cargo compartment, a spring-loaded shooter and realistic details. A fun gift for kids aged 9 and up, this building toy features LEGO minifigures of The Mandalorian and Peli Motto, plus LEGO figures of Grogu (affectionately known by fans as ‘Baby Yoda’) and a BD Droid to inspire creative role play.",
                ],
                [
                    'set_number' => 75325,
                    'language' => "nl",
                    'name' => "De Mandalorians N-1 Starfighter™",
                    'description' => "De verhalen op Tatooine uit Star Wars: The Book of Boba Fett komen voor jonge bouwers tot leven met dit LEGO® bouwmodel van De Mandalorians N-1 Starfighter (75325). De starfighter beschikt over een cockpit voor een minifiguur, ruimte voor Grogu, een vrachtruimte, een schieter met veermechanisme en realistische details. Dit bouwspeelgoed is een leuk cadeau voor kinderen vanaf 9 jaar. De set is inclusief LEGO minifiguren van de Mandalorian en Peli Motto, plus LEGO figuren van Grogu (die onder fans ook bekend staat als 'Baby Yoda') en een BD Droid voor urenlange creatieve rollenspellen.",
                ],
                [
                    'set_number' => 3340,
                    'language' => "en",
                    'name' => "Star Wars #1 - Emperor Palpatine, Darth Maul, and Darth Vader!",
                    'description' => "Join the dark side with the LEGO set 3340 - Star Wars #1 - Emperor Palpatine, Darth Maul, and Darth Vader! With this set, you can build three iconic Star Wars villains, each with their own unique features and weapons. Emperor Palpatine comes with his signature force lightning, Darth Maul with his double-bladed lightsaber, and Darth Vader with his red lightsaber and removable helmet. The set also includes a display stand and information plaque to showcase the minifigures. With 87 pieces, this set is perfect for young Star Wars fans who love the dark side. So gear up and embrace your inner Sith with the LEGO Star Wars #1 set!",
                ],
                [
                    'set_number' => 3340,
                    'language' => "nl",
                    'name' => "Star Wars #1 - Keizer Palpatine, Darth Maul en Darth Vader!",
                    'description' => "Sluit je aan bij de duistere kant met de LEGO set 3340 - Star Wars #1 - Keizer Palpatine, Darth Maul en Darth Vader! Met deze set kun je drie iconische Star Wars schurken bouwen, elk met hun eigen unieke kenmerken en wapens. Keizer Palpatine wordt geleverd met zijn kenmerkende Force Lightning, Darth Maul met zijn dubbele lightsaber en Darth Vader met zijn rode lightsaber en verwijderbare helm. De set bevat ook een displaystandaard en informatieplaat om de minifiguren te presenteren. Met 87 onderdelen is deze set perfect voor jonge Star Wars-fans die van de duistere kant houden. Dus maak je klaar en omarm je innerlijke Sith met de LEGO Star Wars #1 set!",
                ],
                [
                    'set_number' => 75257,
                    'language' => "en",
                    'name' => "Millennium Falcon™",
                    'description' => "Inspire youngsters and grownups with this 75257 LEGO® Star Wars™ Millennium Falcon model. This brick-built version of the iconic Corellian freighter features an array of details, like rotating top and bottom gun turrets, 2 spring-loaded shooters, a lowering ramp and an opening cockpit with space for 2 minifigures. The top panels also open out to reveal a detailed interior in which kids will love to play out scenes from the Star Wars: The Rise of Skywalker movie featuring Star Wars characters Finn, Chewbacca, Lando Calrissian, Boolio, C-3PO, R2-D2 and D-O. This iconic LEGO Star Wars set also makes a great collectible for any fan.",
                ],
                [
                    'set_number' => 75257,
                    'language' => "nl",
                    'name' => "Millennium Falcon™",
                    'description' => "Inspireer zowel kinderen als volwassenen met dit 75257 LEGO® Star Wars™ Millennium Falcon model. Deze van stenen gebouwde versie van het beroemde Corelliaanse vrachtruimteschip is uitgerust met diverse extra's, zoals draaiende geschutskoepels onder en boven, 2 wapens met veermechanisme, een laadklep die omlaag kan worden gebracht en een cockpit die open kan met ruimte voor 2 minifiguren. De panelen bovenop kunnen ook worden geopend en geven toegang tot een gedetailleerd interieur waarin kinderen geweldige scènes kunnen naspelen uit de film Star Wars: The Rise of Skywalker met de Star Wars personages Finn, Chewbacca, Lando Calrissian, Boolio, C-3PO, R2-D2 en D-O. Deze iconische LEGO Star Wars set is bovendien een fantastisch verzamelobject voor fans van het ruimte-epos",
                ]
            ];
        foreach ($translations as $translation) {
            LegoSetsLanguage::create($translation);
        }
    }
}
