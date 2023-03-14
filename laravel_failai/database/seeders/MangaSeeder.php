<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Manga;
use App\Models\GlobalStatus;

class MangaSeeder extends Seeder
{
    public function run()
    {
        $mangas = [
            [
                'title' => 'JoJo no Kimyou na Bouken Part 7: Steel Ball Run',
                'description' => "In the American Old West, the world's greatest race is about to begin. Thousands line up in San Diego to travel over six thousand kilometers for a chance to win the grand prize of fifty million dollars. With the era of the horse reaching its end, contestants are allowed to use any kind of vehicle they wish. Competitors will have to endure grueling conditions, traveling up to a hundred kilometers a day through uncharted wastelands. The Steel Ball Run is truly a one-of-a-kind event The youthful Johnny Joestar, a crippled former horse racer, has come to San Diego to watch the start of the race. There he encounters Gyro Zeppeli, a racer with two steel balls at his waist instead of a gun. Johnny witnesses Gyro using one of his steel balls to unleash a fantastical power, compelling a man to fire his gun at himself during a duel. In the midst of the action, Johnny happens to touch the steel ball and feels a power surging through his legs, allowing him to stand up for the first time in two years. Vowing to find the secret of the steel balls, Johnny decides to compete in the race, and so begins his bizarre adventure across America on the Steel Ball Run.",
                'volumes' => 24,
                'chapters' => 96,
                'release_date' => '2004-01-19',
                'finish_date' => '2011-04-19',
                'status_id' => 6,
            ],
            [
                'title' => 'Vagabond',
                'description' => "In 16th-century Japan, Shinmen Takezou is a wild, rough young man, in both his appearance and his actions. His aggressive nature has won him the collective reproach and fear of his village, leading him and his best friend, Matahachi Honiden, to run away in search of something grander than provincial life. The pair enlist in the Toyotomi army, yearning for glory—but when the Toyotomi suffer a crushing defeat at the hands of the Tokugawa Clan at the Battle of Sekigahara, the friends barely make it out alive. After the two are separated, Shinmen returns home on a self-appointed mission to notify the Hon'iden family of Matahachi's survival. He instead finds himself a wanted criminal, framed for his friend's supposed murder based on his history of violence. Upon being captured, he is strung up on a tree and left to die. An itinerant monk, the distinguished Takuan Soho, takes pity on the 'devil child', secretly freeing Shinmen and christening him with a new name to avoid pursuit by the authorities: Musashi Miyamoto. Vagabond is the fictitious retelling of the life of one of Japan's most renowned swordsmen, the 'Sword Sain't Musashi Miyamoto—his rise from a swordsman with no desire other than to become 'Invincible Under the Heavens' to an enlightened warrior who slowly learns of the importance of close friends, self-reflection, and life itself.",
                'volumes' => 37,
                'chapters' => 327,
                'release_date' => '1998-09-03',
                'finish_date' => '2015-05-21',
                'status_id' => 9,
            ],
            [
                'title' => 'One Piece',
                'description' => "Gol D. Roger, a man referred to as the 'Pirate King', is set to be executed by the World Government. But just before his demise, he confirms the existence of a great treasure, One Piece, located somewhere within the vast ocean known as the Grand Line. Announcing that One Piece can be claimed by anyone worthy enough to reach it, the Pirate King is executed and the Great Age of Pirates begins. Twenty-two years later, a young man by the name of Monkey D. Luffy is ready to embark on his own adventure, searching for One Piece and striving to become the new Pirate King. Armed with just a straw hat, a small boat, and an elastic body, he sets out on a fantastic journey to gather his own crew and a worthy ship that will take them across the Grand Line to claim the greatest status on the high seas.",
                'volumes' => null,
                'chapters' => null,
                'release_date' => '1997-07-22',
                'finish_date' => null,
                'status_id' => 7,
            ],
            [
                'title' => 'Monster',
                'description' => "Kenzou Tenma, a renowned Japanese neurosurgeon working in post-war Germany, faces a difficult choice: to operate on Johan Liebert, an orphan boy on the verge of death, or on the mayor of Düsseldorf. In the end, Tenma decides to gamble his reputation by saving Johan, effectively leaving the mayor for dead. As a consequence of his actions, hospital director Heinemann strips Tenma of his position, and Heinemann's daughter Eva breaks off their engagement. Disgraced and shunned by his colleagues, Tenma loses all hope of a successful career—that is, until the mysterious killing of Heinemann gives him another chance. Nine years later, Tenma is the head of the surgical department and close to becoming the director himself. Although all seems well for him at first, he soon becomes entangled in a chain of gruesome murders that have taken place throughout Germany. The culprit is a monster—the same one that Tenma saved on that fateful day nine years ago.",
                'volumes' => 18,
                'chapters' => 162,
                'release_date' => '1994-12-05',
                'finish_date' => '2001-12-20',
                'status_id' => 6,
            ],
            [
                'title' => 'Slam Dunk',
                'description' => "Hanamichi Sakuragi, a tall, boisterous teenager with flame-red hair and physical strength beyond his years, is eager to put an end to his rejection streak of 50 and finally score a girlfriend as he begins his first year of Shohoku High. However, his reputation for delinquency and destructiveness precedes him, and most of his fellow students subsequently avoid him like the plague. As his first day of school ends, he is left with two strong thoughts: 'I hate basketball' and 'I need a girlfriend'. Haruko Akagi, ignorant of Hanamichi's history of misbehavior, notices his immense height and unwittingly approaches him, asking whether or not he likes basketball. Overcome by the fact that a girl is speaking to him, the red-haired giant blurts out a yes despite his true feelings. At the gym, Haruko asks if he can do a slam dunk. Though a complete novice, Hanamachi palms the ball and makes the leap...but overshoots, slamming his head into the backboard. Amazed by his near-inhuman physical abilities, Haruko quickly notifies the school's basketball captain of his feat. With this, Hanamichi is unexpectedly thrust into a world of competition for a girl he barely knows, but he soon discovers that there is perhaps more to basketball than he once thought.",
                'volumes' => 31,
                'chapters' => 276,
                'release_date' => '1990-09-18',
                'finish_date' => '1996-06-04',
                'status_id' => 6,
            ],
            [
                'title' => 'Fullmetal Alchemist',
                'description' => "Alchemists are knowledgeable and naturally talented individuals who can manipulate and modify matter due to their art. Yet despite the wide range of possibilities, alchemy is not as all-powerful as most would believe. Human transmutation is strictly forbidden, and whoever attempts it risks severe consequences. Even so, siblings Edward and Alphonse Elric decide to ignore this great taboo and bring their mother back to life. Unfortunately, not only do they fail in resurrecting her, they also pay an extremely high price for their arrogance: Edward loses his left leg and Alphonse his entire body. Furthermore, Edward also gives up his right arm in order to seal his brother's soul into a suit of armor. Years later, the young alchemists travel across the country looking for the Philosopher's Stone, in the hopes of recovering their old bodies with its power. However, their quest for the fated stone also leads them to unravel far darker secrets than they could ever imagine.",
                'volumes' => 27,
                'chapters' => 116,
                'release_date' => '2001-07-12',
                'finish_date' => '2010-09-11',
                'status_id' => 6,
            ],
            [
                'title' => 'Grand Blue',
                'description' => "Among the seaside town of Izu's ocean waves and rays of shining sun, Iori Kitahara is just beginning his freshman year at Izu University. As he moves into his uncle's scuba diving shop, Grand Blue, he eagerly anticipates his dream college life, filled with beautiful girls and good friends. But things don't exactly go according to plan. Upon entering the shop, he encounters a group of rowdy, naked upperclassmen, who immediately coerce him into participating in their alcoholic activities. Though unwilling at first, Iori quickly gives in and becomes the heart and soul of the party. Unfortunately, this earns him the scorn of his cousin, Chisa Kotegawa, who walks in at precisely the wrong time. Undeterred, Iori still vows to realize his ideal college life, but will things go according to plan this time, or will his situation take yet another dive?",
                'volumes' => null,
                'chapters' => null,
                'release_date' => '2014-04-07',
                'finish_date' => null,
                'status_id' => 7,
            ],
            [
                'title' => 'Vinland Saga',
                'description' => "Thorfinn, son of one of the Vikings' greatest warriors, is among the finest fighters in the merry band of mercenaries run by the cunning Askeladd, an impressive feat for a person his age. However, Thorfinn is not part of the group for the plunder it entails—instead, for having caused his family great tragedy, the boy has vowed to kill Askeladd in a fair duel. Not yet skilled enough to defeat him, but unable to abandon his vengeance, Thorfinn spends his boyhood with the mercenary crew, honing his skills on the battlefield among the war-loving Danes, where killing is just another pleasure of life. One day, when Askeladd receives word that Danish prince Canute has been taken hostage, he hatches an ambitious plot—one that will decide the next King of England and drastically alter the lives of Thorfinn, Canute, and himself. Set in 11th-century Europe, Vinland Saga tells a bloody epic in an era where violence, madness, and injustice are inescapable, providing a paradise for the battle-crazed and utter hell for the rest who live in it.",
                'volumes' => null,
                'chapters' => null,
                'release_date' => '2005-04-13',
                'finish_date' => null,
                'status_id' => 7,
            ],
            [
                'title' => 'Oyasumi Punpun',
                'description' => "Punpun Onodera is a normal 11-year-old boy living in Japan. Hopelessly idealistic and romantic, Punpun begins to see his life take a subtle—though nonetheless startling—turn to the adult when he meets the new girl in his class, Aiko Tanaka. It is then that the quiet boy learns just how fickle maintaining a relationship can be, and the surmounting difficulties of transitioning from a naïve boyhood to a convoluted adulthood. When his father assaults his mother one night, Punpun realizes another thing: those whom he looked up to were not as impressive as he once thought.",
                'volumes' => 13,
                'chapters' => 147,
                'release_date' => '2007-03-15',
                'finish_date' => '2013-11-02',
                'status_id' => 6,
            ],
            [
                'title' => 'Kingdom',
                'description' => "During the Warring States period in China, Xin and Piao are two brother-like youngsters who dream of becoming Great Generals, despite their low status as orphaned slaves. One day, they encounter a man of nobility, who gives Piao an opportunity to undertake an important duty within the state of Qin's royal palace. Parting ways, Xin and Piao promise each other to one day become the greatest generals in the world. However, after a fierce coup d'état occurs in the palace, Xin meets with a dying Piao, whose last words spur him into action and lead him to encounter the young and soon-to-be king of Qin, Zheng Ying. Although initially on bad terms, Xin and Zheng become comrades and start on a path filled with trials and bloodshed. Zheng's objective is to bring all the warring states under Qin, and Xin seeks to climb to the very top of the army ranks. Against a backdrop of constant tactical battle between states and great political unrest, both outside and within the palace, the two endeavor towards their monumental ambitions that will change history forever.",
                'volumes' => null,
                'chapters' => null,
                'release_date' => null,
                'finish_date' => null,
                'status_id' => 7,
            ],
            [
                'title' => 'Houseki no Kuni',
                'description' => "Long ago, Earth was struck by six meteorites, creating six moons and leaving a lone island in their wake. Those who could not make it to the island sank to the bottom of the ocean, where, over time, they slowly turned to crystal. As countless millennia passed, 28 of these crystallized lifeforms, known as the Lustrous, rose from the depths and resided on the island. Led by the wise Kongou-sensei, they must defend themselves against the seemingly infinite number of Lunarians, inhabitants of the moons who seek to harvest their valuable bodies for crafting weapons and jewelry. Houseki no Kuni centers around Phosphophyllite, a young gem about to turn three hundred years old. Clumsy, extremely fragile, and having no visible talent, they are one of the weakest gems around, unable to help in the fight against the Lunarians in any meaningful way. But as the battle with the otherworldly invaders rages on, they soon learn that power comes at a cost that no one should have to pay.",
                'volumes' => null,
                'chapters' => null,
                'release_date' => '2012-10-25',
                'finish_date' => null,
                'status_id' => 7,
            ],
            [
                'title' => '20th Century Boys',
                'description' => "As the 20th century approaches its end, people all over the world are anxious that the world is changing. And probably not for the better. Kenji Endo is a normal convenience store manager who's just trying to get by. But when he learns that one of his old friends going by the name 'Donkey' has suddenly committed suicide, and that a new cult led by a figure known as 'Friend' is becoming more notorious, Kenji starts to feel that something isn't right. With a few key clues left behind by his deceased friend, Kenji realizes that this cult is much more than he ever thought it would be—not only is this mysterious organization directly targeting him and his childhood friends, but the whole world also faces a grave danger that only the friends have the key to stop. Kenji's simple life of barely making ends meet is flipped upside down when he reunites with his childhood friends, and together they must figure out the truth of how their past is connected to the cult, as the turn of the century could mean the possible end of the world.",
                'volumes' => 22,
                'chapters' => 249,
                'release_date' => '1999-09-27',
                'finish_date' => '2006-04-24',
                'status_id' => 6,
            ],
            [
                'title' => 'Ashita no Joe',
                'description' => "Joe Yabuki has learned how to toughen up and stop trusting others after a troubling youth spent bouncing between orphanages and fending off bullies. After finally escaping the cycle of violent temporary homes, Joe adopts a delinquent lifestyle in the streets of San'ya, a slum in Tokyo. He makes his way through the world with his fists, picking fights with anyone he pleases. Danpei Tange, a washed-up and alcoholic former boxing coach, notices Joe's animalistic combat ability and attempts to mentor the wild teenager. Despite developing an explosive relationship, the two form a close bond and rely on each other to look after the other homeless children in San'ya. Unable to abandon his destructive habits, Joe is arrested for petty crimes. In jail, he meets and fights with lifelong friends and rivals, including the boxing prodigy Tooru Rikiishi. Continuously challenging Rikiishi to fights, Joe is knocked out time after time due to his savage brawling style failing in the face of Rikiishi's controlled boxing technique. But eventually, Joe stuns his rival with a knockout blow, earning Rikiishi's respect and the promise that they will one day meet again inside the professional ring. Finding a reason to live within boxing, Joe takes life head-on with a new purpose. As he rises through Japan's amateur and professional boxing scenes, he contends with painful loss and increasing injury. Joe's passion for fighting is all-consuming, and he grapples with the idea that a life without boxing may not be one worth living.",
                'volumes' => 20,
                'chapters' => 171,
                'release_date' => '1968-01-01',
                'finish_date' => '1973-05-13',
                'status_id' => 6,
            ],
            [
                'title' => 'Monogatari Series: First Season',
                'description' => "This is a story, a 'ghostory' of sorts, about scars that bond, monsters that haunt, and fakes that deceive. The story of Koyomi Araragi begins through a fateful encounter with the all-powerful, blonde-haired, 'hot-blooded, iron-blooded, and cold-blooded' vampire, later introduced as Shinobu Oshino. Their tragic rendezvous results in the end of Araragi's life as a human and his subsequent rebirth as a vampire—a monster. However, this encounter is only the start of his meddlings with the supernatural. Koyomi's noble personality ultimately sees him getting further involved in the lives of others with supernatural afflictions. This is his desperate attempt at returning to a normal human life, in a paranormal world filled with nothing but tragedy, suffering, and inhumanity.",
                'volumes' => 6,
                'chapters' => 107,
                'release_date' => '2006-11-01',
                'finish_date' => '2010-07-28',
                'status_id' => 6,
            ],
            [
                'title' => 'Real',
                'description' => "Tomomi Nomiya, former captain of his high school's basketball team turned delinquent, decides to drop out of school after he is crushed by the guilt of ruining a young girl's life in a traffic accident. As he dedicates his free time to helping her, he stumbles upon Kiyoharu Togawa, a former sprinter who has lost the use of his right leg and now plays wheelchair basketball as an alternate outlet. After challenging Kiyoharu to a one-on-one game, Tomomi is completely defeated. Inspired by this encounter, he realizes that he can't let his love for basketball die so easily and decides that he will do what he can to help others while striving to become a professional player. Meanwhile, Hisanobu Takahashi, Tomomi's replacement as the high school's team captain, gets into an accident and finds himself permanently paralyzed below the waist. Real tells the touching tale of these three young men as they struggle to overcome their disabilities and inner conflicts in order to achieve their dreams while igniting a passion that will bring them together.",
                'volumes' => null,
                'chapters' => null,
                'release_date' => '1999-10-28',
                'finish_date' => null,
                'status_id' => 8,
            ],
            [
                'title' => 'Kaguya-sama wa Kokurasetai: Tensai-tachi no Renai Zunousen',
                'description' => "Considered a genius due to having the highest grades in the country, Miyuki Shirogane leads the prestigious Shuchiin Academy's student council as its president, working alongside the beautiful and wealthy vice president Kaguya Shinomiya. The two are often regarded as the perfect couple by students despite them not being in any sort of romantic relationship. However, the truth is that after spending so much time together, the two have developed feelings for one another; unfortunately, neither is willing to confess, as doing so would be a sign of weakness. With their pride as elite students on the line, Miyuki and Kaguya embark on a quest to do whatever is necessary to get a confession out of the other. Through their daily antics, the battle of love begins!",
                'volumes' => 28,
                'chapters' => 281,
                'release_date' => '2015-05-19',
                'finish_date' => '2022-11-02',
                'status_id' => 6,
            ],
            [
                'title' => 'Monogatari Series: Second Season',
                'description' => "This is a story. A story about choices and consequences, confessions resulting in love and rejection, and decisions leading to sacrifice and tragedy. Koyomi Araragi's decision to save a blonde vampire and meddle with the supernatural resulted in his death as a human and rebirth as a monster. But this was only one of the countless tragedies and choices that Koyomi would be faced with, and he is confronted with the fact that his seemingly unshakeable and hard-earned relationships do not last. As strange oddities continue to manifest in the world around him, he is faced with impossible choices—to sever his ties with those he loves, or eternally remain a part of the world of monsters and apparitions and watch the world crumble as a result. To accept or reject a confession, and sacrifice his all for the sake of others. However, both of these paths could lead to tragedy and farewells.",
                'volumes' => 6,
                'chapters' => 199,
                'release_date' => '2010-10-27',
                'finish_date' => '2011-12-20',
                'status_id' => 6,
            ],
            [
                'title' => 'Youkoso Jitsuryoku Shijou Shugi no Kyoushitsu e: 2-nensei-hen',
                'description' => "As Kiyotaka Ayanokouji and his classmates begin their second-year life, changes are seen everywhere throughout Tokyo Metropolitan Advanced Nurturing High School. With the third-years having graduated and incoming first-years entering the school, alliances are well underway. Additionally, now that Miyabi Nagumo is the student council president, the promise of turning the school into a meritocracy may become a reality. Meanwhile, conflicts between classes continue to build as the class point totals draw close. With another special exam looming ahead, will Ayanokouji remain in the shadows, or will he finally enter the spotlight and help his class rise to the illustrious Class A?",
                'volumes' => null,
                'chapters' => null,
                'release_date' => '2020-01-24',
                'finish_date' => null,
                'status_id' => 7,
            ],
        ];

        foreach ($mangas as $manga) {
            Manga::create($manga);
        }
    }
}
