<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $watchlist = [
        [
            "id" => 5114,
            "url" => "https://myanimelist.net/anime/5114/Fullmetal_Alchemist__Brotherhood",
            "image" => "https://cdn.myanimelist.net/images/anime/1208/94745.jpg",
            "title" => "Fullmetal Alchemist: Brotherhood",
            "synopsis" => "After a horrific alchemy experiment goes wrong in the Elric household, brothers Edward and Alphonse are left in a catastrophic new reality. Ignoring the alchemical principle banning human transmutation, the boys attempted to bring their recently deceased mother back to life. Instead, they suffered brutal personal loss: Alphonse's body disintegrated while Edward lost a leg and then sacrificed an arm to keep Alphonse's soul in the physical realm by binding it to a hulking suit of armor. The brothers are rescued by their neighbor Pinako Rockbell and her granddaughter Winry. Known as a bio-mechanical engineering prodigy, Winry creates prosthetic limbs for Edward by utilizing 'automail,' a tough, versatile metal used in robots and combat armor. After years of training, the Elric brothers set off on a quest to restore their bodies by locating the Philosopher's Stone—a powerful gem that allows an alchemist to defy the traditional laws of Equivalent Exchange. As Edward becomes an infamous alchemist and gains the nickname 'Fullmetal,' the boys' journey embroils them in a growing conspiracy that threatens the fate of the world. [Written by MAL Rewrite]",
            "watched" => "Finished"
        ],
        [
            "id" => 43608,
            "url" => "https://myanimelist.net/anime/43608/Kaguya-sama_wa_Kokurasetai__Ultra_Romantic",
            "image" => "https://cdn.myanimelist.net/images/anime/1160/122627.jpg",
            "title" => "Kaguya-sama wa Kokurasetai: Ultra Romantic",
            "synopsis" => "The elite members of Shuchiin Academy's student council continue their competitive day-to-day antics. Council president Miyuki Shirogane clashes daily against vice-president Kaguya Shinomiya, each fighting tooth and nail to trick the other into confessing their romantic love. Kaguya struggles within the strict confines of her wealthy, uptight family, rebelling against her cold default demeanor as she warms to Shirogane and the rest of her friends. Meanwhile, council treasurer Yuu Ishigami suffers under the weight of his hopeless crush on Tsubame Koyasu, a popular upperclassman who helps to instill a new confidence in him. Miko Iino, the newest student council member, grows closer to the rule-breaking Ishigami while striving to overcome her own authoritarian moral code. As love further blooms at Shuchiin Academy, the student council officers drag their outsider friends into increasingly comedic conflicts. [Written by MAL Rewrite]",
            "watched" => "Watching"
        ],
        [
            "id" => 41467,
            "url" => "https://myanimelist.net/anime/41467/Bleach__Sennen_Kessen-hen",
            "image" => "https://cdn.myanimelist.net/images/anime/1764/126627.jpg",
            "title" => "Bleach: Sennen Kessen-hen",
            "synopsis" => "Was it all just a coincidence, or was it inevitable? Ichigo Kurosaki gained the powers of a Soul Reaper through a chance encounter. As a Substitute Soul Reaper, Ichigo became caught in the turmoil of the Soul Society, a place where deceased souls gather. But with help from his friends, Ichigo overcame every challenge to become even stronger. When new Soul Reapers and a new enemy appear in his hometown of Karakura, Ichigo jumps back into the battlefield with his Zanpakuto to help those in need. Meanwhile, the Soul Society is observing a sudden surge in the number of Hollows being destroyed in the World of the Living. They also receive separate reports of residents in the Rukon District having gone missing. Finally, the Seireitei, home of the Soul Reapers, comes under attack by a group calling themselves the Wandenreich. Led by Yhwach, the father of all Quincies, the Wandenreich declare war against the Soul Reapers with the following message: 'Five days from now, the Soul Society will be annihilated by the Wandenreich.' The history and truth kept hidden by the Soul Reapers for a thousand long years is finally brought to light. All things must come to an end—as Ichigo Kurosaki's final battle begins! (Source: VIZ Media)",
            "watched" => "Finished"
        ],
        [
            "id" => 28977,
            "url" => "https://myanimelist.net/anime/28977/Gintama°",
            "image" => "https://cdn.myanimelist.net/images/anime/3/72078.jpg",
            "title" => "Gintama°",
            "synopsis" => "Gintoki, Shinpachi, and Kagura return as the fun-loving but broke members of the Yorozuya team! Living in an alternate-reality Edo, where swords are prohibited and alien overlords have conquered Japan, they try to thrive on doing whatever work they can get their hands on. However, Shinpachi and Kagura still haven't been paid... Does Gin-chan really spend all that cash playing pachinko? Meanwhile, when Gintoki drunkenly staggers home one night, an alien spaceship crashes nearby. A fatally injured crew member emerges from the ship and gives Gintoki a strange, clock-shaped device, warning him that it is incredibly powerful and must be safeguarded. Mistaking it for his alarm clock, Gintoki proceeds to smash the device the next morning and suddenly discovers that the world outside his apartment has come to a standstill. With Kagura and Shinpachi at his side, he sets off to get the device fixed; though, as usual, nothing is ever that simple for the Yorozuya team. Filled with tongue-in-cheek humor and moments of heartfelt emotion, Gintama's fourth season finds Gintoki and his friends facing both their most hilarious misadventures and most dangerous crises yet. [Written by MAL Rewrite]",
            "watched" => "Watching"
        ],
        [
            "id" => 9253,
            "url" => "https://myanimelist.net/anime/9253/Steins_Gate",
            "image" => "https://cdn.myanimelist.net/images/anime/1935/127974.jpg",
            "title" => "Steins;Gate",
            "synopsis" => "Eccentric scientist Rintarou Okabe has a never-ending thirst for scientific exploration. Together with his ditzy but well-meaning friend Mayuri Shiina and his roommate Itaru Hashida, Rintarou founds the Future Gadget Laboratory in the hopes of creating technological innovations that baffle the human psyche. Despite claims of grandeur, the only notable 'gadget' the trio have created is a microwave that has the mystifying power to turn bananas into green goo. However, when Rintarou decides to attend neuroscientist Kurisu Makise's conference on time travel, he experiences a series of strange events that lead him to believe that there is more to the 'Phone Microwave' gadget than meets the eye. Apparently able to send text messages into the past using the microwave, Rintarou dabbles further with the 'time machine,' attracting the ire and attention of the mysterious organization SERN. Due to the novel discovery, Rintarou and his friends find themselves in an ever-present danger. As he works to mitigate the damage his invention has caused to the timeline, he is not only fighting a battle to save his loved ones, but also one against his degrading sanity. [Written by MAL Rewrite]",
            "watched" => "Finished"
        ],
        [
            "id" => 38524,
            "url" => "https://myanimelist.net/anime/38524/Shingeki_no_Kyojin_Season_3_Part_2",
            "image" => "https://cdn.myanimelist.net/images/anime/1517/100633.jpg",
            "title" => "Shingeki no Kyojin Season 3 Part 2",
            "synopsis" => "Seeking to restore humanity's diminishing hope, the Survey Corps embark on a mission to retake Wall Maria, where the battle against the merciless 'Titans' takes the stage once again. Returning to the tattered Shiganshina District that was once his home, Eren Yeager and the Corps find the town oddly unoccupied by Titans. Even after the outer gate is plugged, they strangely encounter no opposition. The mission progresses smoothly until Armin Arlert, highly suspicious of the enemy's absence, discovers distressing signs of a potential scheme against them. Shingeki no Kyojin Season 3 Part 2 follows Eren as he vows to take back everything that was once his. Alongside him, the Survey Corps strive—through countless sacrifices—to carve a path towards victory and uncover the secrets locked away in the Yeager family's basement. [Written by MAL Rewrite]",
            "watched" => "Later"
        ],
        [
            "id" => 9969,
            "url" => "https://myanimelist.net/anime/9969/Gintama",
            "image" => "https://cdn.myanimelist.net/images/anime/4/50361.jpg",
            "title" => "Gintama'",
            "synopsis" => "After a one-year hiatus, Shinpachi Shimura returns to Edo, only to stumble upon a shocking surprise: Gintoki and Kagura, his fellow Yorozuya members, have become completely different characters! Fleeing from the Yorozuya headquarters in confusion, Shinpachi finds that all the denizens of Edo have undergone impossibly extreme changes, in both appearance and personality. Most unbelievably, his sister Otae has married the Shinsengumi chief and shameless stalker Isao Kondou and is pregnant with their first child. Bewildered, Shinpachi agrees to join the Shinsengumi at Otae and Kondou's request and finds even more startling transformations afoot both in and out of the ranks of the the organization. However, discovering that Vice Chief Toushirou Hijikata has remained unchanged, Shinpachi and his unlikely Shinsengumi ally set out to return the city of Edo to how they remember it. With even more dirty jokes, tongue-in-cheek parodies, and shameless references, Gintama' follows the Yorozuya team through more of their misadventures in the vibrant, alien-filled world of Edo. [Written by MAL Rewrite]",
            "watched" => "Watching"
        ],
        [
            "id" => 39486,
            "url" => "https://myanimelist.net/anime/39486/Gintama__The_Final",
            "image" => "https://cdn.myanimelist.net/images/anime/1988/113791.jpg",
            "title" => "Gintama: The Final",
            "synopsis" => "Two years have passed following the Tendoshuu's invasion of the O-Edo Central Terminal. Since then, the Yorozuya have gone their separate ways. Foreseeing Utsuro's return, Gintoki Sakata begins surveying Earth's ley lines for traces of the other man's Altana. After an encounter with the remnants of the Tendoshuu—who continue to press on in search of immortality—Gintoki returns to Edo. Later, the regrouped Shinsengumi and Yorozuya begin an attack on the occupied Central Terminal. With the Altana harvested by the wreckage of the Tendoshuu's ship in danger of detonating, the Yorozuya and their allies fight their enemies while the safety of Edo—and the rest of the world—hangs in the balance. Fulfilling the wishes of their teacher, Shouyou Yoshida's former students unite and relive their pasts one final time in an attempt to save their futures. [Written by MAL Rewrite]",
            "watched" => "Finished"
        ],
        [
            "id" => 15417,
            "url" => "https://myanimelist.net/anime/15417/Gintama__Enchousen",
            "image" => "https://cdn.myanimelist.net/images/anime/1452/123686.jpg",
            "title" => "Gintama': Enchousen",
            "synopsis" => "While Gintoki Sakata was away, the Yorozuya found themselves a new leader: Kintoki, Gintoki's golden-haired doppelganger. In order to regain his former position, Gintoki will need the help of those around him, a troubling feat when no one can remember him! Between Kintoki and Gintoki, who will claim the throne as the main character? In addition, Yorozuya make a trip back down to red-light district of Yoshiwara to aid an elderly courtesan in her search for her long-lost lover. Although the district is no longer in chains beneath the earth's surface, the trio soon learn of the tragic backstories of Yoshiwara's inhabitants that still haunt them. With flashback after flashback, this quest has Yorozuya witnessing everlasting love and protecting it as best they can with their hearts and souls. Gintama': Enchousen includes moments of action-packed intensity along with their usual lighthearted, slapstick humor for Gintoki and his friends. [Written by MAL Rewrite]",
            "watched" => "Watching"
        ],
        [
            "id" => 11061,
            "url" => "https://myanimelist.net/anime/11061/Hunter_x_Hunter_2011",
            "image" => "https://cdn.myanimelist.net/images/anime/1337/99013.jpg",
            "title" => "Hunter x Hunter (2011)",
            "synopsis" => "Hunters devote themselves to accomplishing hazardous tasks, all from traversing the world's uncharted territories to locating rare items and monsters. Before becoming a Hunter, one must pass the Hunter Examination—a high-risk selection process in which most applicants end up handicapped or worse, deceased. Ambitious participants who challenge the notorious exam carry their own reason. What drives 12-year-old Gon Freecss is finding Ging, his father and a Hunter himself. Believing that he will meet his father by becoming a Hunter, Gon takes the first step to walk the same path. During the Hunter Examination, Gon befriends the medical student Leorio Paladiknight, the vindictive Kurapika, and ex-assassin Killua Zoldyck. While their motives vastly differ from each other, they band together for a common goal and begin to venture into a perilous world. [Written by MAL Rewrite]",
            "watched" => "Watching"
        ],
        [
            "id" => 820,
            "url" => "https://myanimelist.net/anime/820/Ginga_Eiyuu_Densetsu",
            "image" => "https://cdn.myanimelist.net/images/anime/13/13225.jpg",
            "title" => "Ginga Eiyuu Densetsu",
            "synopsis" => "The 150-year-long stalemate between the two interstellar superpowers, the Galactic Empire and the Free Planets Alliance, comes to an end when a new generation of leaders arises: the idealistic military genius Reinhard von Lohengramm, and the FPA's reserved historian, Yang Wenli. While Reinhard climbs the ranks of the Empire with the aid of his childhood friend, Siegfried Kircheis, he must fight not only the war, but also the remnants of the crumbling Goldenbaum Dynasty in order to free his sister from the Kaiser and unify humanity under one genuine ruler. Meanwhile, on the other side of the galaxy, Yang—a strong supporter of democratic ideals—has to stand firm in his beliefs, despite the struggles of the FPA, and show his pupil, Julian Mintz, that autocracy is not the solution. As ideologies clash amidst the war's many casualties, the two strategic masterminds must ask themselves what the real reason behind their battle is. [Written by MAL Rewrite]",
            "watched" => "Later"
        ],
        [
            "id" => 42938,
            "url" => "https://myanimelist.net/anime/42938/Fruits_Basket__The_Final",
            "image" => "https://cdn.myanimelist.net/images/anime/1085/114792.jpg",
            "title" => "Fruits Basket: The Final",
            "synopsis" => "Hundreds of years ago, the Chinese Zodiac spirits and their god swore to stay together eternally. United by this promise, the possessed members of the Souma family shall always return to each other under any circumstances. Yet, when these bonds shackle them from freedom, it becomes an undesirable burden—a curse. As head of the clan, Akito is convinced that he shares a special connection with the other Soumas. While he desperately clings to this fantasy, the rest of the family remains isolated and suppressed by the fear of punishment. Tooru Honda, who has grown attached to the Soumas, is determined to break the chains that bind them. Her companionship with the family and her friends encourages her to move forward with lifting the curse. However, due to confounding revelations, she struggles to find the tenacity to continue her endeavors. With time slowly withering away, Tooru contends with an uncertain future in hopes of reaching the tranquility that may lie beyond all this commotion. [Written by MAL Rewrite]",
            "watched" => "Later"
        ],
        [
            "id" => 34096,
            "url" => "https://myanimelist.net/anime/34096/Gintama",
            "image" => "https://cdn.myanimelist.net/images/anime/3/83528.jpg",
            "title" => "Gintama.",
            "synopsis" => "After joining the resistance against the bakufu, Gintoki and the gang are in hiding, along with Katsura and his Joui rebels. The Yorozuya is soon approached by Nobume Imai and two members of the Kiheitai, who explain that the Harusame pirates have turned against 7th Division Captain Kamui and their former ally Takasugi. The Kiheitai present Gintoki with a job: find Takasugi, who has been missing since his ship was ambushed in a Harusame raid. Nobume also makes a stunning revelation regarding the Tendoushuu, a secret organization pulling the strings of numerous factions, and their leader Utsuro, the shadowy figure with an uncanny resemblance to Gintoki's former teacher. Hitching a ride on Sakamoto's space ship, the Yorozuya and Katsura set out for Rakuyou, Kagura's home planet, where the various factions have gathered and tensions are brewing. Long-held grudges, political infighting, and the Tendoushuu's sinister overarching plan finally culminate into a massive, decisive battle on Rakuyou. [Written by MAL Rewrite]",
            "watched" => "Watching"
        ],
        [
            "id" => 35180,
            "url" => "https://myanimelist.net/anime/35180/3-gatsu_no_Lion_2nd_Season",
            "image" => "https://cdn.myanimelist.net/images/anime/3/88469.jpg",
            "title" => "3-gatsu no Lion 2nd Season",
            "synopsis" => "Now in his second year of high school, Rei Kiriyama continues pushing through his struggles in the professional shogi world as well as his personal life. Surrounded by vibrant personalities at the shogi hall, the school club, and in the local community, his solitary shell slowly begins to crack. Among them are the three Kawamoto sisters—Akari, Hinata, and Momo—who forge an affectionate and familial bond with Rei. Through these ties, he realizes that everyone is burdened by their own emotional hardships and begins learning how to rely on others while supporting them in return. Nonetheless, the life of a professional is not easy. Between tournaments, championships, and title matches, the pressure mounts as Rei advances through the ranks and encounters incredibly skilled opponents. As he manages his relationships with those who have grown close to him, the shogi player continues to search for the reason he plays the game that defines his career. [Written by MAL Rewrite]",
            "watched" => "Later"
        ],
        [
            "id" => 28851,
            "url" => "https://myanimelist.net/anime/28851/Koe_no_Katachi",
            "image" => "https://cdn.myanimelist.net/images/anime/1122/96435.jpg",
            "title" => "Koe no Katachi",
            "synopsis" => "As a wild youth, elementary school student Shouya Ishida sought to beat boredom in the cruelest ways. When the deaf Shouko Nishimiya transfers into his class, Shouya and the rest of his class thoughtlessly bully her for fun. However, when her mother notifies the school, he is singled out and blamed for everything done to her. With Shouko transferring out of the school, Shouya is left at the mercy of his classmates. He is heartlessly ostracized all throughout elementary and middle school, while teachers turn a blind eye. Now in his third year of high school, Shouya is still plagued by his wrongdoings as a young boy. Sincerely regretting his past actions, he sets out on a journey of redemption: to meet Shouko once more and make amends. Koe no Katachi tells the heartwarming tale of Shouya's reunion with Shouko and his honest attempts to redeem himself, all while being continually haunted by the shadows of his past. [Written by MAL Rewrite]",
            "watched" => "Later"
        ],
        [
            "id" => 4181,
            "url" => "https://myanimelist.net/anime/4181/Clannad__After_Story",
            "image" => "https://cdn.myanimelist.net/images/anime/1299/110774.jpg",
            "title" => "Clannad: After Story",
            "synopsis" => "Clannad: After Story, the sequel to the critically acclaimed slice-of-life series Clannad, begins after Tomoya Okazaki and Nagisa Furukawa graduate from high school. Together, they experience the emotional rollercoaster of growing up. Unable to decide on a course for his future, Tomoya learns the value of a strong work ethic and discovers the strength of Nagisa's support. Through the couple's dedication and unity of purpose, they push forward to confront their personal problems, deepen their old relationships, and create new bonds. Time also moves on in the Illusionary World. As the plains grow cold with the approach of winter, the Illusionary Girl and the Garbage Doll are presented with a difficult situation that reveals the World's true purpose. Based on the visual novel by Key and produced by Kyoto Animation, Clannad: After Story is an impactful drama highlighting the importance of family and the struggles of adulthood. [Written by MAL Rewrite]",
            "watched" => "Later"
        ],
        [
            "id" => 918,
            "url" => "https://myanimelist.net/anime/918/Gintama",
            "image" => "https://cdn.myanimelist.net/images/anime/10/73274.jpg",
            "title" => "Gintama",
            "synopsis" => "Edo is a city that was home to the vigor and ambition of samurai across the country. However, following feudal Japan's surrender to powerful aliens known as the 'Amanto,' those aspirations now seem unachievable. With the once-influential shogunate rebuilt as a puppet government, a new law is passed that promptly prohibits all swords in public. Enter Gintoki Sakata, an eccentric silver-haired man who always carries around a wooden sword and maintains his stature as a samurai despite the ban. As the founder of Yorozuya, a small business for odd jobs, Gintoki often embarks on endeavors to help other people—though usually in rather strange and unforeseen ways. Assisted by Shinpachi Shimura, a boy with glasses supposedly learning the way of the samurai; Kagura, a tomboyish girl with superhuman strength and an endless appetite; and Sadaharu, their giant pet dog who loves biting on people's heads, the Yorozuya encounter anything from alien royalty to scuffles with local gangs in the ever-changing world of Edo. [Written by MAL Rewrite]",
            "watched" => "Watching"
        ],
        [
            "id" => 37987,
            "url" => "https://myanimelist.net/anime/37987/Violet_Evergarden_Movie",
            "image" => "https://cdn.myanimelist.net/images/anime/1825/110716.jpg",
            "title" => "Violet Evergarden Movie",
            "synopsis" => "Several years have passed since the end of The Great War. As the radio tower in Leidenschaftlich continues to be built, telephones will soon become more relevant, leading to a decline in demand for 'Auto Memory Dolls.' Even so, Violet Evergarden continues to rise in fame after her constant success with writing letters. However, sometimes the one thing you long for is the one thing that does not appear. Violet Evergarden Movie follows Violet as she continues to comprehend the concept of emotion and the meaning of love. At the same time, she pursues a glimmer of hope that the man who once told her, 'I love you,' may still be alive even after the many years that have passed. [Written by MAL Rewrite]",
            "watched" => "Finished"
        ],
        [
            "id" => 15335,
            "url" => "https://myanimelist.net/anime/15335/Gintama_Movie_2__Kanketsu-hen_-_Yorozuya_yo_Eien_Nare",
            "image" => "https://cdn.myanimelist.net/images/anime/10/51723.jpg",
            "title" => "Gintama Movie 2: Kanketsu-hen - Yorozuya yo Eien Nare",
            "synopsis" => "When Gintoki apprehends a movie pirate at a premiere, he checks the camera's footage and finds himself transported to a bleak, post-apocalyptic version of Edo, where a mysterious epidemic called the 'White Plague' has ravished the world's population. It turns out that the movie pirate wasn't a pirate after all—it was an android time machine, and Gintoki has been hurtled five years into the future! Shinpachi and Kagura, his Yorozuya cohorts, have had a falling out and are now battle-hardened solo vigilantes and he himself has been missing for years, disappearing without a trace after scribbling a strange message in his journal. Setting out in the disguise given to him by the android time machine, Gintoki haphazardly reunites the Yorozuya team to investigate the White Plague, and soon discovers that the key to saving the future lies in the darkness of his own past. Determined to confront a powerful foe, he makes an important discovery—with a ragtag band of friends and allies at his side, he doesn't have to fight alone. [Written by MAL Rewrite]",
            "watched" => "Watching"
        ],
        [
            "id" => 44511,
            "url" => "https://myanimelist.net/anime/44511/Chainsaw_Man",
            "image" => "https://cdn.myanimelist.net/images/anime/1806/126216.jpg",
            "title" => "Chainsaw Man",
            "synopsis" => "Denji is robbed of a normal teenage life, left with nothing but his deadbeat father's overwhelming debt. His only companion is his pet, the chainsaw devil Pochita, with whom he slays devils for money that inevitably ends up in the yakuza's pockets. All Denji can do is dream of a good, simple life: one with delicious food and a beautiful girlfriend by his side. But an act of greedy betrayal by the yakuza leads to Denji's brutal, untimely death, crushing all hope of him ever achieving happiness. Remarkably, an old contract allows Pochita to merge with the deceased Denji and bestow devil powers on him, changing him into a hybrid able to transform his body parts into chainsaws. Because Denji's new abilities pose a significant risk to society, the Public Safety Bureau's elite devil hunter Makima takes him in, letting him live as long as he obeys her command. Guided by the promise of a content life alongside an attractive woman, Denji devotes everything and fights with all his might to make his naive dreams a reality. [Written by MAL Rewrite]",
            "watched" => "Later"
        ],
        [
            "id" => 2904,
            "url" => "https://myanimelist.net/anime/2904/Code_Geass__Hangyaku_no_Lelouch_R2",
            "image" => "https://cdn.myanimelist.net/images/anime/4/9391.jpg",
            "title" => "Code Geass: Hangyaku no Lelouch R2",
            "synopsis" => "One year has passed since the Black Rebellion, a failed uprising against the Holy Britannian Empire led by the masked vigilante Zero, who is now missing. At a loss without their revolutionary leader, Area 11's resistance group—the Black Knights—find themselves too powerless to combat the brutality inflicted upon the Elevens by Britannia, which has increased significantly in order to crush any hope of a future revolt. Lelouch Lamperouge, having lost all memory of his double life, is living peacefully alongside his friends as a high school student at Ashford Academy. His former partner C.C., unable to accept this turn of events, takes it upon herself to remind him of his past purpose, hoping that the mastermind Zero will rise once again to finish what he started, in this thrilling conclusion to the series. [Written by MAL Rewrite]",
            "watched" => "Finished"
        ],
        [
            "id" => 35247,
            "url" => "https://myanimelist.net/anime/35247/Owarimonogatari_2nd_Season",
            "image" => "https://cdn.myanimelist.net/images/anime/6/87322.jpg",
            "title" => "Owarimonogatari 2nd Season",
            "synopsis" => "Following an encounter with oddity specialist Izuko Gaen, third-year high school student Koyomi Araragi wakes up in a strange, deserted void only to be greeted by a joyfully familiar face in an alarmingly unfamiliar place. Araragi, with the help of his girlfriend Hitagi Senjougahara, maneuvers through the webs of his past and the perplexities of the present in search of answers. However, fate once again delivers him to the eccentric transfer student Ougi Oshino, who brings forth an unexpected proposal that may unearth the very foundation to which he is anchored. As Araragi peels back the layers of mystery surrounding an apparition, he discovers a truth not meant to be revealed. [Written by MAL Rewrite]",
            "watched" => "Watching"
        ],
        [
            "id" => 37491,
            "url" => "https://myanimelist.net/anime/37491/Gintama__Shirogane_no_Tamashii-hen_-_Kouhan-sen",
            "image" => "https://cdn.myanimelist.net/images/anime/1776/96566.jpg",
            "title" => "Gintama.: Shirogane no Tamashii-hen - Kouhan-sen",
            "synopsis" => "Following the temporary retreat of the Altana Liberation Army from the Kabuki District, the state of the war has seemingly improved. However, as the Oniwaban, Shinsengumi, and residents of the district combat the army's remnants, Edo's greatest inventor Gengai Hiraga is abducted. Responsible for causing the enemy's withdrawal by rendering their weapons useless, Gengai's nanomachine virus is now at risk of being shut down. Meanwhile, a laser capable of obliterating a planet is activated in Earth's orbit on the Liberation Army's mother ship. Another battle ensues when Shinsuke Takasugi and the rest of the Kiheitai arrive on the vessel to stop the weapon from firing. Forced to fight a war on two fronts, the Yorozuya and their allies must prevail on both sides to save Edo and the rest of the world. [Written by MAL Rewrite]",
            "watched" => "Watching"
        ],
        [
            "id" => 32281,
            "url" => "https://myanimelist.net/anime/32281/Kimi_no_Na_wa",
            "image" => "https://cdn.myanimelist.net/images/anime/5/87048.jpg",
            "title" => "Kimi no Na wa.",
            "synopsis" => "Mitsuha Miyamizu, a high school girl, yearns to live the life of a boy in the bustling city of Tokyo—a dream that stands in stark contrast to her present life in the countryside. Meanwhile in the city, Taki Tachibana lives a busy life as a high school student while juggling his part-time job and hopes for a future in architecture. One day, Mitsuha awakens in a room that is not her own and suddenly finds herself living the dream life in Tokyo—but in Taki's body! Elsewhere, Taki finds himself living Mitsuha's life in the humble countryside. In pursuit of an answer to this strange phenomenon, they begin to search for one another. Kimi no Na wa. revolves around Mitsuha and Taki's actions, which begin to have a dramatic impact on each other's lives, weaving them into a fabric held together by fate and circumstance. [Written by MAL Rewrite]",
            "watched" => "Watching"
        ],
        [
            "id" => 19,
            "url" => "https://myanimelist.net/anime/19/Monster",
            "image" => "https://cdn.myanimelist.net/images/anime/10/18793.jpg",
            "title" => "Monster",
            "synopsis" => "Dr. Kenzou Tenma, an elite neurosurgeon recently engaged to his hospital director's daughter, is well on his way to ascending the hospital hierarchy. That is until one night, a seemingly small event changes Dr. Tenma's life forever. While preparing to perform surgery on someone, he gets a call from the hospital director telling him to switch patients and instead perform life-saving brain surgery on a famous performer. His fellow doctors, fiancée, and the hospital director applaud his accomplishment; but because of the switch, a poor immigrant worker is dead, causing Dr. Tenma to have a crisis of conscience. So when a similar situation arises, Dr. Tenma stands his ground and chooses to perform surgery on the young boy Johan Liebert instead of the town's mayor. Unfortunately, this choice leads to serious ramifications for Dr. Tenma—losing his social standing being one of them. However, with the mysterious death of the director and two other doctors, Dr. Tenma's position is restored. With no evidence to convict him, he is released and goes on to attain the position of hospital director. Nine years later when Dr. Tenma saves the life of a criminal, his past comes back to haunt him—once again, he comes face to face with the monster he operated on. He must now embark on a quest of pursuit to make amends for the havoc spread by the one he saved. [Written by MAL Rewrite]",
            "watched" => "Later"
        ]
    ];
    return view('home')->with('watchlist', $watchlist);
});
