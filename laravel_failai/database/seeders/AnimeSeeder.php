<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Anime;

class AnimeSeeder extends Seeder
{
    public function run()
    {
        $anime = [
            [
                'title' => 'Attack on Titan',
                'description' => "Over a century ago, mankind was devoured by giant beings of unknown intelligence and origin known as Titans – creatures that eat humans alive indiscriminately and for no apparent reason. The remaining population has managed to survive the last hundred years only by building a multi-walled city capable of keeping the Titans at bay, training military recruits to patrol the perimeter and gather intelligence about their mysterious foe. Eren and Mikasa have lived a relatively peaceful life behind the city's walls, but when a massive Titan appears, smashing the outer barrier and unleashing a wave of terror, their lives are brutally changed forever...",
                'episodes' => 25,
                'release_date' => '2013-04-07',
                'finish_date' => '2013-09-29',
                'status_id' => 1,
            ],
            [
                'title' => 'Death Note',
                'description' => "Brutal murders, petty thefts, and senseless violence pollute the human world. In contrast, the realm of death gods is a humdrum, unchanging gambling den. The ingenious 17-year-old Japanese student Light Yagami and sadistic god of death Ryuk share one belief: their worlds are rotten.For his own amusement, Ryuk drops his 'Death Note' into the human world. Light stumbles upon it, deeming the first of its rules ridiculous: the human whose name is written in this note shall die. However, the temptation is too great, and Light experiments by writing a felon's name, which disturbingly enacts his first murder.Aware of the terrifying godlike power that has fallen into his hands, Light—under the alias 'Kira'—follows his wicked sense of justice with the ultimate goal of cleansing the world of all evil-doers. The meticulous mastermind detective L is already on his trail, but as Light's brilliance rivals L's, the grand chase for Kira turns into an intense battle of wits that can only end when one of them is dead.",
                'episodes' => 37,
                'release_date' => '2006-10-04',
                'finish_date' => '2007-06-27',
                'status_id' => 1,
            ],
            [
                'title' => 'Death Parade',
                'description' => "After death, either Heaven or Hell awaits most humans. But for a select few, death brings them to Quindecim—a bar where only pairs of people who die at the same time can enter. Attending the bar is an enigmatic figure known as Decim, who also acts as the arbiter. He passes judgment on those who wind up at Quindecim by challenging them to a life-threatening game. These games determine if the patron's soul will reincarnate into a new life, or be sent into the void, never to be seen again.From darts and bowling to fighting games, the true nature of each patron slowly comes to light as they wager their souls. Though his methods remain unchanged, the sudden appearance of a black-haired amnesiac causes Decim to reevaluate his own rulings.",
                'episodes' => 12,
                'release_date' => '2015-01-10',
                'finish_date' => '2015-03-28',
                'status_id' => 1,
            ],
            [
                'title' => 'ONE PIECE',
                'description' => "Gol D. Roger was known as the 'Pirate King', the strongest and most infamous being to have sailed the Grand Line. The capture and execution of Roger by the World Government brought a change throughout the world. His last words before his death revealed the existence of the greatest treasure in the world, One Piece. It was this revelation that brought about the Grand Age of Pirates, men who dreamed of finding One Piece—which promises an unlimited amount of riches and fame—and quite possibly the pinnacle of glory and the title of the Pirate King.Enter Monkey D. Luffy, a 17-year-old boy who defies your standard definition of a pirate. Rather than the popular persona of a wicked, hardened, toothless pirate ransacking villages for fun, Luffy's reason for being a pirate is one of pure wonder: the thought of an exciting adventure that leads him to intriguing people and ultimately, the promised treasure. Following in the footsteps of his childhood hero, Luffy and his crew travel across the Grand Line, experiencing crazy adventures, unveiling dark mysteries and battling strong enemies, all in order to reach the most coveted of all fortunes—One Piece.",
                'episodes' => 1053,
                'release_date' => '1999-10-20',
                'status_id' => 2,
            ],
            [
                'title' => 'Overlord',
                'description' => "The final hour of the popular virtual reality game Yggdrasil has come. However, Momonga, a powerful wizard and master of the dark guild Ainz Ooal Gown, decides to spend his last few moments in the game as the servers begin to shut down. To his surprise, despite the clock having struck midnight, Momonga is still fully conscious as his character and, moreover, the non-player characters appear to have developed personalities of their own!Confronted with this abnormal situation, Momonga commands his loyal servants to help him investigate and take control of this new world, with the hopes of figuring out what has caused this development and if there may be others in the same predicament.",
                'episodes' => 13,
                'release_date' => '2015-07-07',
                'finish_date' => '2015-09-29',
                'status_id' => 1,
            ],
            [
                'title' => 'Log Horizon',
                'description' => "In the blink of an eye, thirty thousand bewildered Japanese gamers are whisked from their everyday lives into the world of the popular MMORPG, Elder Tale, after the game's latest update—unable to log out. Among them is the socially awkward college student Shiroe, whose confusion and shock lasts only a moment as, a veteran of the game, he immediately sets out to explore the limits of his new reality.Shiroe must learn to live in this new world, leading others and negotiating with the NPC 'natives' in order to bring stability to the virtual city of Akihabara. He is joined by his unfortunate friend Naotsugu, having logged in for the first time in years only to find himself trapped, and Akatsuki, a petite but fierce assassin who labels Shiroe as her master. A tale of fantasy, adventure, and politics, Log Horizon explores the elements of gaming through the eyes of a master strategist who attempts to make the best of a puzzling situation.",
                'episodes' => 25,
                'release_date' => '2013-10-05',
                'finish_date' => '2014-04-22',
                'status_id' => 1,
            ],
            [
                'title' => 'No Game, No Life',
                'description' => "Sixteen sentient races inhabit Disboard, a world overseen by Tet, the One True God. The lowest of the sixteen—Imanity—consists of humans, a race with no affinity for magic. In a place where everything is decided through simple games, humankind seems to have no way out of their predicament—but the arrival of two outsiders poses a change.On Earth, stepsiblings Sora and Shiro are two inseparable shut-ins who dominate various online games under the username 'Blank'. While notorious on the internet, the pair believe that life is merely another dull game. However, after responding to a message from an unknown user, they are suddenly transported to Disboard. The mysterious sender turns out to be Tet, who informs them about the world's absolute rules. After Tet leaves, Sora and Shiro begin their search for more information and a place to stay, taking them to Elkia—Imanity's only remaining kingdom.There, the duo encounters Stephanie Dola, an emotional girl vying for the kingdom's sovereignty. In desperation, she attempts to regain her father's throne, but her foolhardiness makes her goal unachievable. Inspired by the girl's motivation and passion, Sora and Shiro decide to aid Stephanie in getting Elkia back on its feet, ultimately aiming to become the new rulers of the enigmatic realm.",
                'episodes' => 12,
                'release_date' => '2014-04-09',
                'finish_date' => '2014-07-25',
                'status_id' => 1,
            ],
            [
                'title' => 'My Hero Academia',
                'description' => "The appearance of 'quirks', newly discovered super powers, has been steadily increasing over the years, with 80 percent of humanity possessing various abilities from manipulation of elements to shapeshifting. This leaves the remainder of the world completely powerless, and Izuku Midoriya is one such individual.Since he was a child, the ambitious middle schooler has wanted nothing more than to be a hero. Izuku's unfair fate leaves him admiring heroes and taking notes on them whenever he can. But it seems that his persistence has borne some fruit: Izuku meets the number one hero and his personal idol, All Might. All Might's quirk is a unique ability that can be inherited, and he has chosen Izuku to be his successor!Enduring many months of grueling training, Izuku enrolls in UA High, a prestigious high school famous for its excellent hero training program, and this year's freshmen look especially promising. With his bizarre but talented classmates and the looming threat of a villainous organization, Izuku will soon learn what it really means to be a hero.",
                'episodes' => 13,
                'release_date' => '2016-04-03',
                'finish_date' => '2016-06-26',
                'status_id' => 1,
            ],
            [
                'title' => 'Black Clover',
                'description' => "Asta and Yuno were abandoned at the same church on the same day. Raised together as children, they came to know of the 'Wizard King'—a title given to the strongest mage in the kingdom—and promised that they would compete against each other for the position of the next Wizard King. However, as they grew up, the stark difference between them became evident. While Yuno is able to wield magic with amazing power and control, Asta cannot use magic at all and desperately tries to awaken his powers by training physically.When they reach the age of 15, Yuno is bestowed a spectacular Grimoire with a four-leaf clover, while Asta receives nothing. However, soon after, Yuno is attacked by a person named Lebuty, whose main purpose is to obtain Yuno's Grimoire. Asta tries to fight Lebuty, but he is outmatched. Though without hope and on the brink of defeat, he finds the strength to continue when he hears Yuno's voice. Unleashing his inner emotions in a rage, Asta receives a five-leaf clover Grimoire, a 'Black Clover' giving him enough power to defeat Lebuty. A few days later, the two friends head out into the world, both seeking the same goal—to become the Wizard King!",
                'episodes' => 170,
                'release_date' => '2017-10-03',
                'finish_date' => '2021-03-30',
                'status_id' => 1,
            ],
            [
                'title' => 'One-Punch Man',
                'description' => "The seemingly unimpressive Saitama has a rather unique hobby: being a hero. In order to pursue his childhood dream, Saitama relentlessly trained for three years, losing all of his hair in the process. Now, Saitama is so powerful, he can defeat any enemy with just one punch. However, having no one capable of matching his strength has led Saitama to an unexpected problem—he is no longer able to enjoy the thrill of battling and has become quite bored.One day, Saitama catches the attention of 19-year-old cyborg Genos, who witnesses his power and wishes to become Saitama's disciple. Genos proposes that the two join the Hero Association in order to become certified heroes that will be recognized for their positive contributions to society. Saitama, who is shocked that no one knows who he is, quickly agrees. Meeting new allies and taking on new foes, Saitama embarks on a new journey as a member of the Hero Association to experience the excitement of battle he once felt.",
                'episodes' => 12,
                'release_date' => '2015-10-05',
                'finish_date' => '2015-12-21',
                'status_id' => 1,
            ],
            [
                'title' => 'Gintama',
                'description' => "Edo is a city that was home to the vigor and ambition of samurai across the country. However, following feudal Japan's surrender to powerful aliens known as the 'Amanto', those aspirations now seem unachievable. With the once-influential shogunate rebuilt as a puppet government, a new law is passed that promptly prohibits all swords in public.Enter Gintoki Sakata, an eccentric silver-haired man who always carries around a wooden sword and maintains his stature as a samurai despite the ban. As the founder of Yorozuya, a small business for odd jobs, Gintoki often embarks on endeavors to help other people—though usually in rather strange and unforeseen ways.Assisted by Shinpachi Shimura, a boy with glasses supposedly learning the way of the samurai; Kagura, a tomboyish girl with superhuman strength and an endless appetite; and Sadaharu, their giant pet dog who loves biting on people's heads, the Yorozuya encounter anything from alien royalty to scuffles with local gangs in the ever-changing world of Edo.",
                'episodes' => 201,
                'release_date' => '2006-04-04',
                'finish_date' => '2010-03-25',
                'status_id' => 1,
            ],
            [
                'title' => 'Reborn to Master the Blade: From Hero-King to Extraordinary Squire',
                'description' => "From his deathbed, Hero-King Inglis, the divine knight and master of all he surveys, gazes down on the empire he built with his mighty hand. Having devoted his life to statecraft and his subjects' well-being, his one unfulfilled wish is to live again, for himself this time: a warrior's life he'd devoted himself to before his rise to power.His patron goddess, Alistia, hears his plea and smiles upon him, flinging his soul into the far future. Goddesses work in mysterious ways—not only is Inglis now the daughter of a minor noble family, but at her first coming-of-age ceremony at 6, she's found ineligible to begin her knighthood!However, for a lady of Inglis's ambition, this is less a setback and more the challenge she was (re)born to overcome. 'It's not the blood that runs through your veins that makes a knight; it's the blood you shed on the battlefield! ' The curtain rises on the legend of an extraordinary lady squire reborn to master the blade!",
                'episodes' => 10,
                'release_date' => '2023-01-10',
                'status_id' => 2,
            ],
            [
                'title' => 'The Strongest Sage with the Weakest Crest',
                'description' => "At birth, mages randomly acquire one of the four 'crests' that represents the extent of their magical capability. Equipped with a crest specializing in creation, a man named Gaius reached the ceiling of his potential, becoming known as the world's strongest sage. Despite his overwhelming power, he is unsatisfied with his abilities and desires to possess the mark suitable for close combat. Knowing that a person's crest is unchangeable, Gaius decides to reincarnate far into the future, hoping to alter his fate.Thousands of years later, Gaius is reborn as Mathias Hildesheimer, successfully obtaining his long-coveted crest. However, he is surprised to learn that in these times, magic has vastly waned, and the techniques that were once widely used are now nothing more than just a speck of legend. Moreover, the crest that he painstakingly strived to attain is now considered the weakest—merely dubbed the 'Crest of Failure.'Nevertheless, Mathias naturally exceeds all expectations. He enrolls into the royal capital's Second Academy, acing every trial that comes his way. But soon after, Mathias discovers the dark truth behind humanity's downfall into magical mediocrity—demons—and endeavors to remedy the consequence of his millennia-long absence once and for all.",
                'episodes' => '12',
                'release_date' => '2022-01-08',
                'finish_date' => '2022-03-26',
                'status_id' => 1,
            ],
            [
                'title' => 'BLUELOCK',
                'description' => "Yoichi Isagi was mere moments away from scoring a goal that would have sent his high school soccer team to the nationals, but a split-second decision to pass the ball to his teammate cost him that reality. Bitter, confused, and disappointed, Isagi wonders if the outcome would have been different had he not made the pass. When the young striker returns home, an invitation from the Japan Football Union awaits him. Through an arbitrary and biased decision-making process, Isagi is one of three hundred U-18 strikers selected for a controversial project named Blue Lock.The project's ultimate goal is to turn one of the selected players into the star striker for the Japanese national team. To find the best participant, each diamond in the rough must compete against others through a series of solo and team competitions to rise to the top. Putting aside his ethical objections to the project, Isagi feels compelled to fight his way to the top, even if it means ruthlessly crushing the dreams of 299 aspiring young strikers.",
                'episodes' => '22',
                'release_date' => '2022-10-09',
                'status_id' => 2,
            ],
            [
                'title' => 'Naruto: Shippuden',
                'description' => "It has been two and a half years since Naruto Uzumaki left Konohagakure, the Hidden Leaf Village, for intense training following events which fueled his desire to be stronger. Now Akatsuki, the mysterious organization of elite rogue ninja, is closing in on their grand plan which may threaten the safety of the entire shinobi world. Although Naruto is older and sinister events loom on the horizon, he has changed little in personality—still rambunctious and childish—though he is now far more confident and possesses an even greater determination to protect his friends and home. Come whatever may, Naruto will carry on with the fight for what is important to him, even at the expense of his own body, in the continuation of the saga about the boy who wishes to become Hokage.",
                'episodes' => '500',
                'release_date' => '2007-02-15',
                'finish_date' => '2017-03-23',
                'status_id' => 1,
            ],
            [
                'title' => 'Naruto',
                'description' => "Moments prior to Naruto Uzumaki's birth, a huge demon known as the Kyuubi, the Nine-Tailed Fox, attacked Konohagakure, the Hidden Leaf Village, and wreaked havoc. In order to put an end to the Kyuubi's rampage, the leader of the village, the Fourth Hokage, sacrificed his life and sealed the monstrous beast inside the newborn Naruto.Now, Naruto is a hyperactive and knuckle-headed ninja still living in Konohagakure. Shunned because of the Kyuubi inside him, Naruto struggles to find his place in the village, while his burning desire to become the Hokage of Konohagakure leads him not only to some great new friends, but also some deadly foes.",
                'episodes' => '220',
                'release_date' => '2002-10-03',
                'finish_date' => '2007-02-08',
                'status_id' => 1,
            ],
            [
                'title' => 'Bleach',
                'description' => "Ichigo Kurosaki is an ordinary high schooler—until his family is attacked by a Hollow, a corrupt spirit that seeks to devour human souls. It is then that he meets a Soul Reaper named Rukia Kuchiki, who gets injured while protecting Ichigo's family from the assailant. To save his family, Ichigo accepts Rukia's offer of taking her powers and becomes a Soul Reaper as a result.However, as Rukia is unable to regain her powers, Ichigo is given the daunting task of hunting down the Hollows that plague their town. However, he is not alone in his fight, as he is later joined by his friends—classmates Orihime Inoue, Yasutora Sado, and Uryuu Ishida—who each have their own unique abilities. As Ichigo and his comrades get used to their new duties and support each other on and off the battlefield, the young Soul Reaper soon learns that the Hollows are not the only real threat to the human world.",
                'episodes' => '366',
                'release_date' => '2004-10-05',
                'finish_date' => '2012-03-27',
                'status_id' => 1,
            ],
            [
                'title' => 'Demon Slayer: Kimetsu no Yaiba',
                'description' => "Ever since the death of his father, the burden of supporting the family has fallen upon Tanjirou Kamado's shoulders. Though living impoverished on a remote mountain, the Kamado family are able to enjoy a relatively peaceful and happy life. One day, Tanjirou decides to go down to the local village to make a little money selling charcoal. On his way back, night falls, forcing Tanjirou to take shelter in the house of a strange man, who warns him of the existence of flesh-eating demons that lurk in the woods at night.When he finally arrives back home the next day, he is met with a horrifying sight—his whole family has been slaughtered. Worse still, the sole survivor is his sister Nezuko, who has been turned into a bloodthirsty demon. Consumed by rage and hatred, Tanjirou swears to avenge his family and stay by his only remaining sibling. Alongside the mysterious group calling themselves the Demon Slayer Corps, Tanjirou will do whatever it takes to slay the demons and protect the remnants of his beloved sister's humanity.",
                'episodes' => '26',
                'release_date' => '2019-04-06',
                'finish_date' => '2019-09-28',
                'status_id' => 1,
            ],
            [
                'title' => 'JUJUTSU KAISEN',
                'description' => "Idly indulging in baseless paranormal activities with the Occult Club, high schooler Yuuji Itadori spends his days at either the clubroom or the hospital, where he visits his bedridden grandfather. However, this leisurely lifestyle soon takes a turn for the strange when he unknowingly encounters a cursed item. Triggering a chain of supernatural occurrences, Yuuji finds himself suddenly thrust into the world of Curses—dreadful beings formed from human malice and negativity—after swallowing the said item, revealed to be a finger belonging to the demon Sukuna Ryoumen, the 'King of Curses.'Yuuji experiences first-hand the threat these Curses pose to society as he discovers his own newfound powers. Introduced to the Tokyo Metropolitan Jujutsu Technical High School, he begins to walk down a path from which he cannot return—the path of a Jujutsu sorcerer.",
                'episodes' => '24',
                'release_date' => '2020-10-03',
                'finish_date' => '2021-03-27',
                'status_id' => 1,
            ],
            [
                'title' => 'Chainsaw Man',
                'description' => "Denji is robbed of a normal teenage life, left with nothing but his deadbeat father's overwhelming debt. His only companion is his pet, the chainsaw devil Pochita, with whom he slays devils for money that inevitably ends up in the yakuza's pockets. All Denji can do is dream of a good, simple life: one with delicious food and a beautiful girlfriend by his side. But an act of greedy betrayal by the yakuza leads to Denji's brutal, untimely death, crushing all hope of him ever achieving happiness.Remarkably, an old contract allows Pochita to merge with the deceased Denji and bestow devil powers on him, changing him into a hybrid able to transform his body parts into chainsaws. Because Denji's new abilities pose a significant risk to society, the Public Safety Bureau's elite devil hunter Makima takes him in, letting him live as long as he obeys her command. Guided by the promise of a content life alongside an attractive woman, Denji devotes everything and fights with all his might to make his naive dreams a reality.",
                'episodes' => '12',
                'release_date' => '2022-10-12',
                'finish_date' => '2022-12-28',
                'status_id' => 1,
            ],
            [
                'title' => 'No Guns Life',
                'description' => "The technology to create powerful cyborg soldiers has been released for public use by the Berühren Corporation. Those outfitted with robotic parts are known as the Extended. Juuzou Inui, one such Extended, was created as a soldier and has no memories of his former life. But now, after the war, he runs a business that takes care of Extended-related incidents around the city.Rumors of a renegade Extended that kidnapped a child reach his ears; lo and behold, as Juuzo returns to his office, a giant robotic man with a boy on his back crashes in, asking for help. While Juuzou could just turn the guy in and be done with it, something about this situation is too fishy to ignore. It seems that everyone wants hold of this kid and, whether he likes it or not, Juuzou must find out why this Extended is on the run, how it connects to the Berühren Corporation, and just how far the treachery runs in this city.",
                'episodes' => '12',
                'release_date' => '2019-10-11',
                'finish_date' => '2019-12-27',
                'status_id' => 1,
            ],
            [
                'title' => 'Dororo',
                'description' => "The greedy samurai lord Daigo Kagemitsu's land is dying, and he would do anything for power, even renounce Buddha and make a pact with demons. His prayers are answered by 12 demons who grant him the power he desires by aiding his prefecture's growth, but at a price. When Kagemitsu's first son is born, the boy has no limbs, no nose, no eyes, no ears, nor even skin—yet still, he lives.This child is disposed of in a river and forgotten. But as luck would have it, he is saved by a medicine man who provides him with prosthetics and weapons, allowing for him to survive and fend for himself. The boy lives and grows, and although he cannot see, hear, or feel anything, he must defeat the demons that took him as sacrifice. With the death of each one, he regains a part of himself that is rightfully his. For many years he wanders alone, until one day an orphan boy, Dororo, befriends him. The unlikely pair of castaways now fight for their survival and humanity in an unforgiving, demon-infested world.",
                'episodes' => '24',
                'release_date' => '2019-01-07',
                'finish_date' => '2019-06-24',
                'status_id' => 1,
            ],
            [
                'title' => 'GANGSTA.',
                'description' => "Nicholas Brown and Worick Arcangelo, known in the city of Ergastalum as the 'Handymen', are mercenaries for hire who take on jobs no one else can handle. Contracted by powerful mob syndicates and police alike, the Handymen have to be ready and willing for anything. After completing the order of killing a local pimp, the Handymen add Alex Benedetto—a prostitute also designated for elimination—to their ranks to protect her from forces that want her gone from the decrepit hellhole of a city she has come to call home. However, this criminal’s paradise is undergoing a profound period of change that threatens to corrode the delicate balance of power.Ergastalum was once a safe haven for 'Twilights', super-human beings born as the result of a special drug but are now being hunted down by a fierce underground organization. This new threat is rising up to challenge everything the city stands for, and the Handymen will not be able to avoid this coming war.",
                'episodes' => '13',
                'release_date' => '2015-02-02',
                'finish_date' => '2015-09-24',
                'status_id' => 1,
            ],
            [
                'title' => 'Black Lagoon',
                'description' => "Salaryman Rokurou Okajima spends his days trying to climb his company's corporate ladder, until one day when a business negotiation in Thailand goes awry. During the botched deal, he falls hostage to the Lagoon Company—a band of ruthless pirate mercenaries. Left to the whims of his captors after his managers refuse to pay his ransom, Rokurou does the unthinkable: instead of begging for his life, he joins the very crew who kidnapped him.Now a member of the group, Rokurou must adjust to his new residence in the dissolute hellscape known as Roanapur, a city where corruption and crime run rampant, and even the smallest slipup could cost him his life. If not for one of the many crime syndicates on the island, Rokurou also constantly finds himself at odds with his brash, gunslinging colleague, Revy.As Rokurou struggles to abandon his past—and with more than just the profits from the Lagoon Company's illegal trading on the line—he must quickly find the resolve to make tough decisions in high-stress situations while keeping his humanity intact.",
                'episodes' => '12',
                'release_date' => '2006-04-09',
                'finish_date' => '2006-06-25',
                'status_id' => 1,
            ],

        ];

        foreach ($anime as $ani) {
            Anime::create($ani);
        }
    }
}
