<?php
try
{
//********** Initialisatie
	$_srv = $_SERVER['PHP_SELF'];
 
			$_output = " 
            
                            <tr>
                                <td>16/02/2022</td>
                                <td id='IS_Ucraina' class='pointer' class='titluri'>Împăratul Sudului - Ucraina, război informațional și influență</td>
                            </tr>
                            <tr>
                                <td>16/02/2022</td>
                                <td id='RoevWade' class='pointer' class='titluri'>Roe v. Wade – Florida, West Virginia, și Arizona</td>
                            </tr>
                            <tr>
                                <td>16/02/2022</td>
                                <td id='NordStream2' class='pointer' class='titluri'>Rusia - Nord Stream 2 și pârghia geopolitică</td>
                            </tr>
                            <tr>
                                <td>16/02/2022</td>
                                <td id='Putin2' class='pointer' class='titluri'>Putin - O schimbare de comportament - Partea 2</td>
                            </tr>
                            <tr>
                                <td>16/02/2022</td>
                                <td id='Putin1' class='pointer' class='titluri'>Putin - O schimbare de comportament</td>
                            </tr>
                            <tr>
                                <td>16/02/2022</td>
                                <td id='erainfo' class='pointer' class='titluri'>Era informațională și conflictul modern</td>
                            </tr>
                            <tr>
                                <td>16/02/2022</td>
                                <td id='RusiaDonbass' class='pointer' class='titluri'>Russia – Donbass, și dezinformare</td>
                            </tr>
                            <tr>
                                <td>16/02/2022</td>
                                <td id='sinteza' class='pointer' class='titluri'>Sinteză Foreign Policy – 17 Feb. 2022</td>
                            </tr>
                            <tr>
                                <td>16/02/2022</td>
                                <td id='PutinBiden' class='pointer' class='titluri'>Vladimir Putin, Joe Biden, și Panium</td>
                            </tr>
                            <tr>
                                <td>16/02/2022</td>
                                <td onclick='Mutilarea()' class='pointer' class='titluri'>Mutilarea genitală feminină - 200 de milioane de femei și un exemplu al nevoii de feminism radical</td>
                            </tr>
                            <tr>
                                <td>13/02/2022</td>
                                <td onclick='Panium()' class='pointer' class='titluri'>Panium – Era Informației și Războiul Informațional</td>
                            </tr>
                            <tr>
                                <td>13/02/2022</td>
                                <td onclick='CurteaSuprema()' class='pointer' class='titluri'>Curtea Supremă – prima femeie de culoare nominalizată</td>
                            </tr>
                            <tr>
                                <td>10/02/2022</td>
                                <td onclick='ElSalvador()' class='pointer' class='titluri'>El Salvador - avortul într-o țară majoritar catolică</td>
                            </tr>
                            <tr>
                                <td>10/02/2022</td>
                                <td onclick='importantaUcrainei()' class='pointer' class='titluri'>Rusia și importanța Ucrainei</td>
                            </tr>
                            <tr>
                                <td>09/02/2022</td>
                                <td onclick='KSOccident()' class='pointer' class='titluri'>2021 - KS și o criză tot mai mare cu Occidentul</td>
                            </tr>
                            <tr>
                                <td>09/02/2022</td>
                                <td onclick='misoginie()' class='pointer' class='titluri'>Misoginie - Feminismul radical
                                    și 'Toate Viețile Contează'</td>
                            </tr>
                            <tr>
                                <td>02/02/2022</td>
                                <td onclick='ChinaAutoritarista()' class='pointer' class='titluri'>China - mai mult
                                    decât autoritaristă</td>
                            </tr>
                            <tr>
                                <td>02/02/2022</td>
                                <td onclick='SchimbarileClimatice()' class='pointer' class='titluri'>2014 și Schimbările
                                    Climatice</td>
                            </tr>
                            <tr>
                                <td>30/01/2022</td>
                                <td onclick='pinguinii()' class='pointer' class='titluri'>Pinguinii - o pereche
                                    homosexuală îngrijește un ou</td>
                            </tr>
                            <tr>
                                <td>30/01/2022</td>
                                <td onclick='RusiaInformationWar()' class='pointer' class='titluri'>Rusia - Războiul
                                    informațional în contextul Ucrainei</td>
                            </tr>
                            <tr>
                                <td>30/01/2022</td>
                                <td onclick='RusiaSiOccidentul()' class='pointer' class='titluri'>Rusia și Occidentul -
                                    Ucraina ca 'sferă de influență'</td>
                            </tr>

                            <tr>
                                <td>28/01/2022</td>
                                <td onclick='HughHefner()' class='pointer' class='titluri'>Hugh Hefner - feminismul
                                    liberal din al doilea val și 'emanciparea femeilor'</td>
                            </tr>
                            <tr>
                                <td>21/01/2022</td>
                                <td onclick='RusiaUltimeleDesfasurari()' class='pointer' class='titluri'>Rusia –
                                    ultimele evoluții și mișcări de trupe</td>
                            </tr>
                            <tr>
                                <td>20/01/2022</td>
                                <td onclick='RusiaSiIran()' class='pointer' class='titluri'>Rusia și Iran</td>
                            </tr>
                            <tr>
                                <td>20/01/2022</td>
                                <td onclick='antisemitism()' class='pointer' class='titluri'>Antisemitismul – alfa
                                    Babilonului modern și două fluxuri de informații</td>
                            </tr>
                            <tr>
                                <td>18/01/2022</td>
                                <td onclick='RusiaBelarusUcraina()' class='pointer' class='titluri'>Rusia – Belarus și
                                    Ucraina</td>
                            </tr>
                            <tr>
                                <td>18/01/2022</td>
                                <td><a href='Iran.html' class='listaArticoleA' class='pointer' class='titluri'>Iran: –
                                        din 1979 până în 2022 </a></td>
                            </tr>
                            <tr>
                                <td>17/01/2022</td>
                                <td onclick='RussiaInformation()' class='pointer' class='titluri'>Rusia – Utilizarea
                                    informațiilor în „sfere de influență”, China și CSTO</td>
                            </tr>
                            <tr>
                                <td>17/01/2022</td>
                                <td onclick='taliban()' class='pointer' class='titluri'>Talibanii - și drepturile
                                    universale ale femeilor</td>
                            </tr>
                            <tr>
                                <td>17/01/2022</td>
                                <td onclick='compromis()' class='pointer' class='titluri'>SUA - Compromis la Casa Albă
                                </td>
                            </tr>

                            <tr>
                                <td>14/01/2022</td>
                                <td onclick='RusiaSiUcraina()' class='pointer' class='titluri'>Rusia - Ucraina, atac
                                    cibernetic și o 'fundătură'</td>
                            </tr>
                            <tr>
                                <td>12/01/2022</td>
                                <td onclick='SchimbareaClimei()' class='pointer' class='titluri'>Schimbări climatice -
                                    2014 - 2021</td>
                            </tr>
                            <tr>
                                <td>12/01/2022</td>
                                <td onclick='RussiaSiPanium()' class='pointer' class='titluri'>Rusia și Panium - o istorie progresivă a jocurilor de putere, a sferelor de influență, a războiului ...</td>
                            </tr>
                            <tr>
                                <td>09/01/2022</td>
                                <td onclick='RusiaKazahstan()' class='pointer' class='titluri'>Rusia – tulburări civile,
                                    Kazahstan și o
                                    alianță post-sovietică</td>
                            </tr>
                            <tr>
                                <td>09/01/2022</td>
                                <td onclick='Argentina()' class='pointer' class='titluri'>Argentina - 'dură cu
                                    criminalitatea' și egalitatea de gen</td>
                            </tr>
                            <tr>
                                <td>06/01/2022</td>
                                <td onclick='womensRights()' class='pointer' class='titluri'>Drepturile femeilor –
                                    legate de economia unei țări și de rata...</td>
                            </tr>
                            <tr>
                                <td>06/01/2022</td>
                                <td onclick='thePapacy()' class='pointer' class='titluri'>Papalitatea – Feminism
                                    cultural și liberal contrafăcut</td>
                            </tr>
                            <tr>
                                <td>04/01/2022</td>
                                <td onclick='taraGlorioasa()' class='pointer' class='titluri'>Țara Glorioasă –
                                    Democrația și Legea Duminicală</td>
                            </tr>
                            <tr>
                                <td>04/01/2022</td>
                                <td onclick='SouthKorea()' class='pointer' class='titluri'>Coreea de Sud - Noua
                                    generație și o reacție agresivă față de egalitatea de gen</td>
                            </tr>
                            <tr>
                                <td>02/01/2022</td>
                                <td onclick='USAoverview()' class='pointer' class='titluri'>SUA – o scurtă prezentare
                                    generală a 5 evoluții cheie din 2021</td>
                            </tr>
                            <tr>
                                <td>02/01/2022</td>
                                <td onclick='counterfeit()' class='pointer' class='titluri'>Contrafacerea – 2021 și egalitatea de gen
                                </td>
                            </tr>
                            <tr>
                                <td>30/12/2021</td>
                                <td onclick='Unassessment()' class='pointer' class='titluri'>ONU - Evaluare rapidă a efectelor COVID-19 asupra violenței împotriva femeilor și a normelor ...</td>
                            </tr>
                            <tr>
                                <td>30/12/2021</td>
                                <td onclick='pandemic()' class='pointer' class='titluri'>Umbra pandemiei: Iordania, Orientul Mijlociu și violența bazată pe gen</td>
                            </tr>
                            <tr>
                                <td>29/12/2021</td>
                                <td onclick='transformation1()' class='pointer' class='titluri'>Rusia - ÎS și o transformare internă 
                                    Partea 1/2 </td>
                            </tr>
                            <tr>
                                <td>29/12/2021</td>
                                <td onclick='transformation2()' class='pointer' class='titluri'>Rusia - ÎS și o transformare internă 
                                    Partea 2/2 </td>
                            </tr>
                            <tr>
                                <td>28/12/2021</td>
                                <td onclick='Desmond1()' class='pointer' class='titluri'>Desmond Tutu - Partea 1/2</td>
                            </tr>
                            <tr>
                                 <td>28/12/2021</td>
                                 <td onclick='Desmond2()' class='pointer' class='titluri'>Desmond Tutu - Partea 2/2</td>
                            </tr>
                            <tr>
                                <td>24/12/2021</td>
                                <td onclick='theKing1()' class='pointer' class='titluri'>Împăratul Sudului - P. 1/2 - Conferința de presă anuală a lui Putin</td>
                            </tr>
                            <tr>
                                <td>24/12/2021</td>
                                <td onclick='theKing2()' class='pointer' class='titluri'>Împăratul Sudului - P. 2/2 - Disperarea lui Putin în legătură cu Ucraina</td>
                            </tr>
                            <tr>
                                <td>23/12/2021</td>
                                <td onclick='hinduIndia()' class='titluri'>India – Hindu nationalism...</td>
                            </tr>
                            <tr>
                                <td>22/12/2021</td>
                                <td onclick='judicialBranch()' class='titluri'>Judicial Branch – lower courts...</td>
                            </tr>
                            <tr>
                                <td>21/12/2021</td>
                                <td><a href='washingtonPost1.html' class='listaArticoleA' class='pointer'
                                        class='titluri'>Statele Unite – căderea democrației și tulburările civile</a>
                                </td>
                            </tr>
                            <tr>
                                <td>21/12/2021</td>
                                <td class='titluri'>Paganism / Protestantism – and Israel’s golden calf</td>
                            </tr>
                            <tr>
                                <td>19/12/2021</td>
                                <td class='titluri'>Taliban – Sexism and Compromise</td>
                            </tr>
                            <tr>
                                <td>19/12/2021</td>
                                <td class='titluri'>USA – Trump’s rehabilitated image</td>
                            </tr>
                            <tr>
                                <td>17/12/2021</td>
                                <td class='titluri'>Mary Beard - Misogyny...</td>
                            </tr>
                            <tr>
                                <td>17/12/2021</td>
                                <td class='titluri'>Panium and Syria’s “decade-long” war</td>
                            </tr>
                            <tr>
                                <td>15/12/2021</td>
                                <td class='titluri'>China – nationalism, sexism...</td>
                            </tr>
                            <tr>
                                <td>15/12/2021</td>
                                <td class='titluri'>Clinton – 2011 U.N. speech on LGBT human rights</td>
                            </tr>
                            <tr>
                                <td>14/12/2021</td>
                                <td class='titluri'>USA – Mississippi and Roe V. Wade</td>
                            </tr>
                            <tr>
                                <td>14/12/2021</td>
                                <td class='titluri'>USA – Texas and Roe V. Wade</td>
                            </tr>
                            <tr>
                                <td>13/12/2021</td>
                                <td class='titluri'>Mussolini, authoritarianism...</td>
                            </tr>
                            <tr>
                                <td>13/12/2021</td>
                                <td class='titluri'>The SL – global authoritarianism</td>
                            </tr>
                            <tr>
                                <td>13/12/2021</td>
                                <td class='titluri'>Russia – NATO and Ukraine</td>
                            </tr>
                            <tr>
                                <td>10/12/2021</td>
                                <td class='titluri'>A Global Dispensation...</td>
                            </tr>
                            <tr>
                                <td>09/12/2021</td>
                                <td class='titluri'>Africa – Gender bias and violence...</td>
                            </tr>
                            <tr>
                                <td>09/12/2021</td>
                                <td class='titluri'>Russia, NATO, and the origins...</td>
                            </tr>
                            <tr>
                                <td>08/12/2021</td>
                                <td class='titluri'>Gender – Eden to Eden and the final Test</td>
                            </tr>
                            <tr>
                                <td>07/12/2021</td>
                                <td class='titluri'>The USA and the ‘demise of Democracy'</td>
                            </tr>
                            <tr>
                                <td>07/12/2021</td>
                                <td class='titluri'>Russia - hybrid warfare with Ukraine</td>
                            </tr>
                            <tr>
                                <td>05/12/2021</td>
                                <td onclick='jurnalismul()' class='pointer' class='titluri'>Jurnalismul și căderea la
                                    nivel mondial a democrației
                                </td>
                            </tr>
                            <tr>
                                <td>03/12/2021</td>
                                <td onclick='siria()' class='pointer' class='titluri'>Siria – puterea lui Bashar
                                    al-Assad</td>
                            </tr>
                            <tr>
                                <td>02/12/2021</td>
                                <td class='titluri'>Sfârșitul lui Roe</td>
                            </tr>
                            <tr>
                                <td>02/12/2021</td>
                                <td class='titluri'>Rusia – Ucraina și război...</td>
                            </tr>
                            <tr>
                                <td>02/12/2021</td>
                                <td class='titluri'>Sclavia și sexismul contemporan</td>
                            </tr>
                            <tr>
                                <td>02/12/2021</td>
                                <td class='titluri'>China, drepturile omului și WTA</td>
                            </tr>
                            <tr>
                                <td>30/11/2021</td>
                                <td class='titluri'>Australia – misogyny in Government</td>
                            </tr>
                            <tr>
                                <td>30/11/2021</td>
                                <td class='titluri'>China – The Uyghur Genocide</td>
                            </tr>
                            <tr>
                                <td>30/11/2021</td>
                                <td class='titluri'>Israel and Iran – “shadow war” is escalating</td>
                            </tr>
                            <tr>
                                <td>25/11/2021</td>
                                <td class='titluri'>Russia – The Constitutional Amendments...</td>
                            </tr>
                            <tr>
                                <td>23/11/2021</td>
                                <td class='titluri'>Seventh-Day-Adventism and Gender in 2021</td>
                            </tr>
                            <tr>
                                <td>23/11/2021</td>
                                <td class='titluri'>Instagram (social media) – and Gender</td>
                            </tr>
                            <tr>
                                <td>22/11/2021</td>
                                <td class='titluri'>Vaccination and the 1st Amendment</td>
                            </tr>
                            <tr>
                                <td>22/11/2021</td>
                                <td class='titluri'>Catholicism, Protestantism, Seventh-Day Adventism...</td>
                            </tr>
                            <tr>
                                <td>20/11/2021</td>
                                <td class='titluri'>”Autocracy Inc.” – and the domination of women</td>
                            </tr>
                            <tr>
                                <td>20/11/2021</td>
                                <td class='titluri'>Russia – A summary of Putin’s...</td>
                            </tr>
                            <tr>
                                <td>19/11/2021</td>
                                <td class='titluri'>Russia – Putin vs. NATO</td>
                            </tr>
                            <tr>
                                <td>19/11/2021</td>
                                <td class='titluri'>China – misogyny and the cost of speaking out</td>
                            </tr>
                            <tr>
                                <td>18/11/2021</td>
                                <td class='titluri'>USA – the separation of Church and State</td>
                            </tr>
                            <tr>
                                <td>17/11/2021</td>
                                <td class='titluri'>The Papacy – alpha history of Modern Babylon and...</td>
                            </tr>
                            <tr>
                                <td>17/11/2021</td>
                                <td class='titluri'>Ireland – The Papacy and misogyny in the early 1900’s</td>
                            </tr>
                            <tr>
                                <td>16/11/2021</td>
                                <td class='titluri'>Democracy falling – Information War, 1989, and a global test</td>
                            </tr>
                            <tr>
                                <td>16/11/2021</td>
                                <td class='titluri'>Poland / Belarus, and a political proxy-crisis</td>
                            </tr>
                            <tr>
                                <td>14/11/2021</td>
                                <td class='titluri'>Seventh-Day Adventism – Gender and the harbinger of shipwreck</td>
                            </tr>
                            <tr>
                                <td>14/11/2021</td>
                                <td class='titluri'>Compromise – a story of thousands of individual excuses </td>
                            </tr>
                            <tr>
                                <td>09/11/2021</td>
                                <td class='titluri'>Spain – Feminism, prostitution, and the culture war</td>
                            </tr>
                            <tr>
                                <td>09/11/2021</td>
                                <td class='titluri'>Spanish language - Social Media and disinformation</td>
                            </tr>
                            <tr>
                                <td>07/11/2021</td>
                                <td class='titluri'>A Prophetic history of sexism through 1989 and 2014 to the present
                                </td>
                            </tr>
                            <tr>
                                <td>07/11/2021</td>
                                <td class='titluri'>1989 – Opposition to Feminism, and societies
                                    unwillingness/inability...</td>
                            </tr>
                            <tr>
                                <td>01/11/2021</td>
                                <td class='titluri'>Part 1/3 - ”Beauty = Value,” Studies targeting babies and young
                                    children</td>
                            </tr>
                            <tr>
                                <td>31/10/2021</td>
                                <td class='titluri'>The Counterfeit – Alpha – The Pope and Mussollini</td>
                            </tr>
                            <tr>
                                <td>27/10/2021</td>
                                <td class='titluri'>The Sunday Law – Domestic Violence in the USA, firearms, and...
                                </td>
                            </tr>
                            <tr>
                                <td>27/10/2021</td>
                                <td class='titluri'>The Sunday Law – sexism, the extent of the problem and how it
                                    exhibits...</td>
                            </tr>
                            <tr>
                                <td>26/10/2021</td>
                                <td class='titluri'>Social media (Facebook) and right-wing content </td>
                            </tr>
                            <tr>
                                <td>25/10/2021</td>
                                <td class='titluri'>Russia – internet censorship </td>
                            </tr>
                            <tr>
                                <td>25/10/2021</td>
                                <td class='titluri'>New York Times – Morning Brief – Oct 25 </td>
                            </tr>
                            <tr>
                                <td>25/10/2021</td>
                                <td class='titluri'>Social Media (Twitter) and rightwing content</td>
                            </tr>
                            <tr>
                                <td>22/10/2021</td>
                                <td class='titluri'>Foreign Policy Morning Brief – 21st & 22nd of October </td>
                            </tr>
                            <tr>
                                <td>22/10/2022</td>
                                <td class='titluri'>LGBTQIA+  The more hidden effects of discrimination</td>
                            </tr>
                            <tr>
                                <td>21/10/2021</td>
                                <td class='titluri'>Foreign Policy – China Brief – Oct. 21</td>
                            </tr>
                            <tr>
                                <td>21/10/2021</td>
                                <td class='titluri'>Donald Trump - social media, and conservative “free speech'</td>
                            </tr>
                            <tr>
                                <td>21/10/2021</td>
                                <td class='titluri'>The United States – Voting Rights</td>
                            </tr>
                            <tr>
                                <td>20/10/2021</td>
                                <td class='titluri'>Gender and the Culture War </td>
                            </tr>
                            <tr>
                                <td>20/10/2021</td>
                                <td class='titluri'>China – Confucianism - Gender Roles and Sexism within the culture...
                                </td>
                            </tr>
                            <tr>
                                <td>19/10/2021</td>
                                <td class='titluri'>Russia and an escalated conflict with NATO </td>
                            </tr>
                            <tr>
                                <td>19/10/2021</td>
                                <td class='titluri'>Supreme Court – sexism towards female justices </td>
                            </tr>
                            <tr>
                                <td>18/10/2021</td>
                                <td class='titluri'>True Stream of Information – Wellness, social media, and Vow 17 –
                                    Part 2</td>
                            </tr>
                            <tr>
                                <td>18/10/2021</td>
                                <td class='titluri'>True Stream of Information – Veganism, social media, and Vow 17 –
                                    Part 1</td>
                            </tr>
                            <tr>
                                <td>13/10/2021</td>
                                <td class='titluri'>The KS – speaking of China & Taiwan</td>
                            </tr>
                            <tr>
                                <td>13/10/2021</td>
                                <td class='titluri'>Information Age / Information War – ransomware and cyberattacks</td>
                            </tr>
                            <tr>
                                <td>13/10/2021</td>
                                <td class='titluri'>USA – Trump and the Republican Party </td>
                            </tr>
                            <tr>
                                <td>13/10/2021</td>
                                <td class='titluri'>The Counterfeit – Vatican reform in the spirit of Liberation
                                    Theology</td>
                            </tr>
                            <tr>
                                <td>13/10/2021</td>
                                <td class='titluri'>Women’s equality and Pornography</td>
                            </tr>
                            <tr>
                                <td>10/10/2021</td>
                                <td class='titluri'>Chinese nationalism and Taiwan – understanding the context </td>
                            </tr>
                            <tr>
                                <td>10/10/2021</td>
                                <td class='titluri'>Trans rights and the prophetic “culture war”</td>
                            </tr>
                            <tr>
                                <td>08/10/2021</td>
                                <td class='titluri'>Sociology and gender disparity in the home</td>
                            </tr>
                            <tr>
                                <td>07/10/2021</td>
                                <td class='titluri'>Foreign Policy – Morning Brief – Oct 7 </td>
                            </tr>
                            <tr>
                                <td>07/10/2021</td>
                                <td class='titluri'>#MeToo Movement, China, and the fight for gender equality</td>
                            </tr>
                            <tr>
                                <td>05/10/2021</td>
                                <td class='titluri'>Pandora Papers – Impact of Russian Sanctions</td>
                            </tr>
                            <tr>
                                <td>05/10/2021</td>
                                <td class='titluri'>Gender Equality and the unavoidable impact of culture </td>
                            </tr>
                            <tr>
                                <td>04/10/2021</td>
                                <td class='titluri'>Panama Papers – Vladimir Putin’s hidden wealth </td>
                            </tr>
                            <tr>
                                <td>04/10/2021</td>
                                <td class='titluri'>The Panama Papers – explained by The Guardian </td>
                            </tr>
                            <tr>
                                <td>04/10/2021</td>
                                <td class='titluri'>The Pandora Papers - Oct.3 2021 Leak of 11.9 million financial
                                    records</td>
                            </tr>
                            <tr>
                                <td>29/09/2021</td>
                                <td class='titluri'>Donald Trump and the Information War ongoing</td>
                            </tr>
                            <tr>
                                <td>29/09/2021</td>
                                <td class='titluri'>Foreign Policy - Morning Brief – Sep. 29</td>
                            </tr>
                            <tr>
                                <td>28/09/2021</td>
                                <td class='titluri'>Foreign Policy – Morning Brief – Sep. 28</td>
                            </tr>
                            <tr>
                                <td>28/09/2021</td>
                                <td class='titluri'>Gender Roles and politics – early effects of visible sexism on young
                                    children</td>
                            </tr>
                            <tr>
                                <td>27/09/2021</td>
                                <td class='titluri'>Russia – Increasing desperate attempts to control</td>
                            </tr>
                            <tr>
                                <td>27/09/2021</td>
                                <td class='titluri'>Switzerland – Gay Marriage </td>
                            </tr>
                            <tr>
                                <td>26/09/2021</td>
                                <td class='titluri'>Switzerland – voting today on Same-Sex Marriage </td>
                            </tr>
                            <tr>
                                <td>26/09/2021</td>
                                <td class='titluri'>Gender bias – tracing its effect throughout the medical profession
                                </td>
                            </tr>
                            <tr>
                                <td>26/09/2021</td>
                                <td class='titluri'>Homosexuality – “Don’t Ask Don’t Tell”</td>
                            </tr>
                            <tr>
                                <td>22/09/2021</td>
                                <td class='titluri'>Allison Draper and the pudendum - In connection with the article
                                    above</td>
                            </tr>
                            <tr>
                                <td>22/09/2021</td>
                                <td class='titluri'>The female anatomy, “shame,” and the war to reform science and
                                    medicine </td>
                            </tr>
                            <tr>
                                <td>19/09/2021</td>
                                <td class='titluri'>Sexism, “purity” of women, and female genital mutilation</td>
                            </tr>
                            <tr>
                                <td>19/09/2021</td>
                                <td class='titluri'>Me-Too era, Institutionalised sexism, and USA gymnastics</td>
                            </tr>
                            <tr>
                                <td>17/09/2021</td>
                                <td class='titluri'>Pope Francis – Church and State </td>
                            </tr>
                            <tr>
                                <td>17/09/2021</td>
                                <td class='titluri'>Russia – 2021 legislative election</td>
                            </tr>
                            <tr>
                                <td>16/09/2021</td>
                                <td class='titluri'>Women’s human rights, The Me-Too Movement, and China</td>
                            </tr>
                            <tr>
                                <td>16/09/2021</td>
                                <td class='titluri'>Social Media and mental health </td>
                            </tr>
                            <tr>
                                <td>15/09/2021</td>
                                <td class='titluri'>The equality of Women, and the subject of LGBT </td>
                            </tr>
                            <tr>
                                <td>13/09/2021</td>
                                <td class='titluri'>September 11 – Afghanistan and the formal beginning of the Taliban
                                    government
                                </td>
                            </tr>
                            <tr>
                                <td>12/09/2021</td>
                                <td class='titluri'>Articles for elder Tess Presentation – September 11 </td>
                            </tr>
                            <tr>
                                <td>11/09/2021</td>
                                <td class='titluri'>*9/11, Osama Bin Laden and Information in War * </td>
                            </tr>
                            <tr>
                                <td>11/09/2021</td>
                                <td class='titluri'>Afghanistan in 2021 and the spread of Misinformation </td>
                            </tr>
                            <tr>
                                <td>09/09/2021</td>
                                <td class='titluri'>Brazil – Bolsonaro and the right-wing threat to democracy</td>
                            </tr>
                            <tr>
                                <td>09/09/2021</td>
                                <td class='titluri'>Foreign Policy – Morning Brief – Sep. 9 </td>
                            </tr>
                            <tr>
                                <td>06/09/2021</td>
                                <td class='titluri'>Brazil – Bolsonaro, another election and another attack on democracy
                                </td>
                            </tr>
                            <tr>
                                <td>06/09/2021</td>
                                <td class='titluri'>Foreign Policy – Morning Brief – September 7</td>
                            </tr>
                            <tr>
                                <td>06/09/2021</td>
                                <td class='titluri'>USA 2020 Election – no peace and safety message</td>
                            </tr>
                            <tr>
                                <td>05/09/2021</td>
                                <td class='titluri'>Texas – Women’s Freedom and tracing the Waymarks </td>
                            </tr>
                            <tr>
                                <td>05/09/2021</td>
                                <td class='titluri'>Roe vs. Wade – A war in the states </td>
                            </tr>
                            <tr>
                                <td>05/09/2021</td>
                                <td class='titluri'>Roe vs. Wade – Women - A clear perspective</td>
                            </tr>
                            <tr>
                                <td>03/09/2021</td>
                                <td class='titluri'>Israel – the end of Netanyahu is not the end of “Netanyahu-ism”</td>
                            </tr>
                            <tr>
                                <td>03/09/2021</td>
                                <td class='titluri'>Texas – Republican Victories</td>
                            </tr>
                            <tr>
                                <td>03/09/2021</td>
                                <td class='titluri'>Texas – Roe v. Wade</td>
                            </tr>
                            <tr>
                                <td>01/09/2021</td>
                                <td class='titluri'>Foreign Policy – Morning Brief – Sep. 1</td>
                            </tr>
                            <tr>
                                <td>01/09/2021</td>
                                <td class='titluri'>Foreign Policy - Morning Brief – 31st August</td>
                            </tr>
                            <tr>
                                <td>01/09/2021</td>
                                <td class='titluri'>Texas – Republican/Conservative successes</td>
                            </tr>
                            <tr>
                                <td>25/08/2021</td>
                                <td class='titluri'>Foreign Policy – Africa Brief - 25th August </td>
                            </tr>
                            <tr>
                                <td>25/08/2021</td>
                                <td class='titluri'>Foreign Policy – Morning Brief – 25th August </td>
                            </tr>
                            <tr>
                                <td>23/08/2021</td>
                                <td class='titluri'>Afghanistan – Patriarchy and abuse, from 2001 to 2021 </td>
                            </tr>
                            <tr>
                                <td>19/08/2021</td>
                                <td class='titluri'>Foreign Policy – Morning Brief – August 19</td>
                            </tr>
                            <tr>
                                <td>19/08/2021</td>
                                <td class='titluri'>Afghanistan – Abuse, Rape, Slavery, and Silence</td>
                            </tr>
                            <tr>
                                <td>18/08/2021</td>
                                <td class='titluri'>LGBT civil rights – A political crisis</td>
                            </tr>
                            <tr>
                                <td>18/08/2021</td>
                                <td class='titluri'>Afghanistan – the Taliban and Moscow</td>
                            </tr>
                            <tr>
                                <td>17/08/2021</td>
                                <td class='titluri'>Trans – Gender Identity, Information and Misinformation</td>
                            </tr>
                            <tr>
                                <td>17/08/2021</td>
                                <td class='titluri'>Afghanistan – a glimpse at recent history </td>
                            </tr>
                            <tr>
                                <td>17/08/2021</td>
                                <td class='titluri'>Foreign Policy – Morning Brief – August 17</td>
                            </tr>
                            <tr>
                                <td>17/08/2021</td>
                                <td class='titluri'>Foreign Policy – Morning Brief – August 16</td>
                            </tr>
                            <tr>
                                <td>16/08/2021</td>
                                <td class='titluri'>21 – Afghanistan falls to the Taliban </td>
                            </tr>
                            <tr>
                                <td>15/08/2021</td>
                                <td class='titluri'>INCEL Movement - Part 2 Understanding the mindset of ownership...
                                </td>
                            </tr>
                            <tr>
                                <td>15/08/2021</td>
                                <td class='titluri'>INCEL Movement - Part 1 History and growth of the movement, 1989,
                                    and 2014...</td>
                            </tr>
                            <tr>
                                <td>15/08/2021</td>
                                <td class='titluri'>Afghanistan – the fall of Mazar-i-Sharif</td>
                            </tr>
                            <tr>
                                <td>13/08/2021</td>
                                <td class='titluri'>Papacy – 2 streams within the counterfeit</td>
                            </tr>
                            <tr>
                                <td>13/08/2021</td>
                                <td class='titluri'>Foreign Policy – Morning Brief – August 13 </td>
                            </tr>
                            <tr>
                                <td>10/08/2021</td>
                                <td class='titluri'>Afghanistan – 20 years after 2001 </td>
                            </tr>
                            <tr>
                                <td>10/08/2021</td>
                                <td class='titluri'>Morning Brief – Foreign Policy – August 10 </td>
                            </tr>
                            <tr>
                                <td>09/08/2021</td>
                                <td class='titluri'>Tucker Carlson – American Democracy, and Hungary </td>
                            </tr>
                            <tr>
                                <td>06/08/2021</td>
                                <td class='titluri'>Merrick Garland – Voting Rights and their dismantling</td>
                            </tr>
                            <tr>
                                <td>06/08/2021</td>
                                <td class='titluri'>Climate Change – tipping points, and the Gulf Stream</td>
                            </tr>
                            <tr>
                                <td>06/08/2021</td>
                                <td class='titluri'>Foreign Policy – Morning Brief – August 6</td>
                            </tr>
                            <tr>
                                <td>06/08/2021</td>
                                <td class='titluri'>Indonesia – Virginity Tests</td>
                            </tr>
                            <tr>
                                <td>05/08/2021</td>
                                <td class='titluri'>Covid-19, Gender Roles, and backward steps for Equality </td>
                            </tr>
                            <tr>
                                <td>05/08/2021</td>
                                <td class='titluri'>Sexism and stereotypes in the field of Psychology</td>
                            </tr>
                            <tr>
                                <td>05/08/2021</td>
                                <td class='titluri'>Southern Border – gun violence </td>
                            </tr>
                            <tr>
                                <td>04/08/2021</td>
                                <td class='titluri'>Foreign Policy – Africa Brief – July 4 </td>
                            </tr>
                            <tr>
                                <td>04/08/2021</td>
                                <td class='titluri'>Foreign Policy – Morning Brief – August 4 </td>
                            </tr>
                            <tr>
                                <td>03/08/2021</td>
                                <td class='titluri'>2019 – “Quid pro quo” and a Republican crossroad</td>
                            </tr>
                            <tr>
                                <td>02/08/2021</td>
                                <td class='titluri'>Foreign Policy – Morning Brief – August 02</td>
                            </tr>
                            <tr>
                                <td>02/08/2021</td>
                                <td class='titluri'>Invisible women</td>
                            </tr>
                            <tr>
                                <td>01/08/2021</td>
                                <td class='titluri'>America’s Rage – an analysis</td>
                            </tr>
                            <tr>
                                <td>01/08/2021</td>
                                <td class='titluri'>Gender Stereotypes – “Women talk too much” </td>
                            </tr>
                            <tr>
                                <td>30/07/2021</td>
                                <td class='titluri'>Foreign Policy - Morning Brief – July 30</td>
                            </tr>
                            <tr>
                                <td>29/07/2021</td>
                                <td><a href='tedEx.html' class='listaArticoleA' class='pointer'
                                        class='titluri'>Menstruația – TedX discurs despre lipsa de acces a unor femei la
                                        produse de igienă</td>
                            </tr>
                            <tr>
                                <td>29/07/2021</td>
                                <td class='titluri'>Project Blitz – “In God We Trust'</td>
                            </tr>
                            <tr>
                                <td>27/07/2021</td>
                                <td class='titluri'>2020 Election and the Republican horn</td>
                            </tr>
                            <tr>
                                <td>26/07/2021</td>
                                <td class='titluri'>Sexism – the war and the cost of equality </td>
                            </tr>
                            <tr>
                                <td>26/07/2021</td>
                                <td class='titluri'>Morning Brief – July 26 </td>
                            </tr>
                            <tr>
                                <td>26/07/2021</td>
                                <td class='titluri'>Ghana – LGBTQ civil rights, and persecution</td>
                            </tr>
                            <tr>
                                <td>25/07/2021</td>
                                <td><a href='pegasusSpyware.html' class='listaArticoleA' class='pointer'
                                        class='titluri'>Era informației – Pegasus Spyware</td>
                            </tr>
                            <tr>
                                <td>25/07/2021</td>
                                <td class='titluri'>2021 – Global Unrest </td>
                            </tr>
                            <tr>
                                <td>23/07/2021</td>
                                <td class='titluri'>Menstruation – Sexism and Stigma </td>
                            </tr>
                            <tr>
                                <td>23/07/2021</td>
                                <td class='titluri'>Sexism, stereotypes, and the voice</td>
                            </tr>
                            <tr>
                                <td>22/07/2021</td>
                                <td class='titluri'>Foreign Policy – Morning Brief – July 22 </td>
                            </tr>
                            <tr>
                                <td>22/07/2021</td>
                                <td class='titluri'>Sexism – body objectification and beauty standards </td>
                            </tr>
                            <tr>
                                <td>22/07/2021</td>
                                <td class='titluri'>Covid-19 – illustrating the side-effects of racism and inequality...
                                </td>
                            </tr>
                            <tr>
                                <td>21/07/2021</td>
                                <td class='titluri'>Morning Brief – July 21 </td>
                            </tr>
                            <tr>
                                <td>20/07/2021</td>
                                <td class='titluri'>LGBTQ civil rights – 2022 mid-term Election Part 2 </td>
                            </tr>
                            <tr>
                                <td>20/07/2021</td>
                                <td class='titluri'>LGBTQ civil rights – 2022 mid-term Election Part 1 </td>
                            </tr>
                            <tr>
                                <td>19/07/2021</td>
                                <td class='titluri'>Morning Brief – July 19 </td>
                            </tr>
                            <tr>
                                <td>19/07/2021</td>
                                <td class='titluri'>Menstruation – Destigmatising Women </td>
                            </tr>
                            <tr>
                                <td>18/07/2021</td>
                                <td class='titluri'>LGBT – US conflict regarding trans equality </td>
                            </tr>
                            <tr>
                                <td>18/07/2021</td>
                                <td class='titluri'>Climate Change – a world-wide problem </td>
                            </tr>
                            <tr>
                                <td>16/07/2021</td>
                                <td class='titluri'>USA – further progression </td>
                            </tr>
                            <tr>
                                <td>16/07/2021</td>
                                <td class='titluri'>Morning Brief – July 16 </td>
                            </tr>
                            <tr>
                                <td>14/07/2021</td>
                                <td class='titluri'>Russia & USA – Cyber-crime escalating tensions – revisited </td>
                            </tr>
                            <tr>
                                <td>14/07/2021</td>
                                <td class='titluri'>Morning Brief – July 14</td>
                            </tr>
                            <tr>
                                <td>13/07/2021</td>
                                <td class='titluri'>Foreign Policy Brief – July 13</td>
                            </tr>
                            <tr>
                                <td>13/07/2021</td>
                                <td class='titluri'>Russia & USA – Cyber-crime escalating tensions</td>
                            </tr>
                            <tr>
                                <td>11/07/2021</td>
                                <td class='titluri'>Gamergate – 2014 - Information war and violence against women</td>
                            </tr>
                            <tr>
                                <td>09/07/2021</td>
                                <td class='titluri'>Republican Horn of the USA</td>
                            </tr>
                            <tr>
                                <td>09/07/2021</td>
                                <td class='titluri'>Equality and Language </td>
                            </tr>
                            <tr>
                                <td>07/07/2021</td>
                                <td class='titluri'>Climate Change – 2014 documentary – Years of Living Dangerously</td>
                            </tr>
                            <tr>
                                <td>06/07/2021</td>
                                <td class='titluri'>Morning Brief – July 6 </td>
                            </tr>
                            <tr>
                                <td>06/07/2021</td>
                                <td class='titluri'>Church + State – Using “religious freedom” to discriminate
                                    Hobby Lobby 2/2</td>
                            </tr>
                            <tr>
                                <td>06/07/2021</td>
                                <td class='titluri'>Church + State – Using “religious freedom” to discriminate
                                    Hobby Lobby 1/2</td>
                            </tr>
                            <tr>
                                <td>05/07/2021</td>
                                <td class='titluri'>USA – January 6 insurrection </td>
                            </tr>
                            <tr>
                                <td>05/07/2021</td>
                                <td class='titluri'>Equality – Racism and its side effects </td>
                            </tr>
                            <tr>
                                <td>04/07/2021</td>
                                <td class='titluri'>Vatican – Civil War midst a work of reform</td>
                            </tr>
                            <tr>
                                <td>04/07/2021</td>
                                <td class='titluri'>Standards of ‘beauty’ – manifestations of Sexism</td>
                            </tr>
                            <tr>
                                <td>02/07/2021</td>
                                <td class='titluri'>Voting Rights 2/2
                                    July 1 Supreme Court case – Brnovich vs. DNC</td>
                            </tr>
                            <tr>
                                <td>02/07/2021</td>
                                <td class='titluri'>Voting Rights 1/2
                                    July 1 Supreme Court case – Brnovich vs. DNC</td>
                            </tr>
                            ";
		
//********** output
	require("../smarty/mySmarty.inc.php");
	$_smarty->assign('srv', $_srv);
	$_smarty->assign('output', $_output);
	$_smarty->display('articole.tpl');

}

catch (Exception $_exception) //********** exception handling
{
	include("../php_lib/myExceptionHandling.inc.php"); 
}
?>
