## Activitat 1: Model en Cascada

![Model en Cascada](https://upload.wikimedia.org/wikipedia/commons/thumb/e/e2/Waterfall_model.svg/800px-Waterfall_model.svg.png)

**font**: https://en.wikipedia.org/wiki/Waterfall_model#/media/File:Waterfall_model.svg

S'estratifica en fases.
Acabada una fase s'inicia la següent.

Correspon a projectes de gran embergadura on existeix amplitud pressupostària.

És el cicle de vida clàssic per exelència.

****

##Activitat 2: Model Incremental

![Model Incremental](https://upload.wikimedia.org/wikipedia/commons/e/e4/Incremental_Model.jpg)

**font** https://en.wikipedia.org/wiki/Incremental_build_model#/media/File:Incremental_Model.jpg

Divideix en "slides" (particions) el _Model en cascada_.
Se sol relacionar al desenvolupament de mòduls d'una amplicació modular, on per cada mòdul a desenvolupar s'aplica un desenvolupament en cascada.

Correspon a projectes que se serveixen per entregables tancats, que no solen tenir cap dependència entre sí.

> ##Nota:
Aquells projectes dels quals dependran els altres, seran els primers a realitzar-se, i per norma general no es modificaran en cap "cicle incremental" posterior.

> ##Nota2:
Aquest model permet una més alta ocupació de l'equip (quan es difideix per perfils i rols), donat que a l'inici d'un cicle d'una part de l'equip, l'altra està finalitzant el cicle anterior.

****

## Activitat 3: Model en V

![Model en V](https://upload.wikimedia.org/wikipedia/commons/thumb/e/e8/Systems_Engineering_Process_II.svg/599px-Systems_Engineering_Process_II.svg.png)

**font** https://en.wikipedia.org/wiki/V-Model_(software_development)#/media/File:Systems_Engineering_Process_II.svg

Atorga el mateix tractament a la fase de test i desplegament que al cicle complert.
Establint 4 fases per al què en el cas del _Model en cascada_ era una única fase:

- Fase de tests **unitaris**: Determinen el compliment de les especificacions funcionals: 
  * contractes d'aplicació/mòduls/classes/llibreries... 
  * convencions de codi (_poc habituals_)
  * documentació (_menys habituals encara_)
- Fase de tests d'**integració**: Determinen que la integració d'un desenvolupament en una apliació, o d'un sub-sistema en un sistema, no impedeixi que la resta de parts testejables del sistema superin una fase completa de tests, i que el sub-sistema en sí, mateix superi novament els tests unitaris
- Fase de tests de **rendiment** (aka stress o de sistema): Determinen que la integració anterior, compleixi amb:
  * els requisits no funcionals: temps de resposta, estabilitat, correcte consum i bloqueig de recursos reservats i compartits, us dels dispositius i interficies reservats en el sitema (ports, sockets, named pipes...), dependències de llibreries, accés a recursos (POSIX FS Permissions, ACL ... )
  * no impacti negativament al rendiment del sistema
  * no comprometi la seguretat del sistema
  * no atempti contra el funcionament d'altres aplicacions o serveis del sistema
- Fase de tests d'**usabilitat** i **acceptació**: Es determina si el resultat del desenvolupament i la seva integració, és correspon amb les interficies gràfiques i usabilitat (**LookAndFeel**) inicialment plantejats a l'inici del model, i per tant tenen garantida l'acceptació del client

> ##NOTA
Els sectors destinataris als quals s'aplica aquest model de cicle de vida de software, són aquells que requereixen d'una alta fiabilitat i estabilitat;
Com poden ser sistemes mèdics i hospitalaris, sistemes de transport de persones o mercaderies, sistemes mètrics i de control d'explosius o reactius, sistemes financers, sistemes de monitorització i control de seguretat

****

##Activitat 4: Model iteratiu

![Model iteratiu](https://upload.wikimedia.org/wikipedia/commons/thumb/3/39/Iterative_development_model.svg/512px-Iterative_development_model.svg.png)

**font** https://en.wikipedia.org/wiki/Iterative_and_incremental_development#/media/File:Iterative_development_model.svg

Planteja el cicle de vida del software com un bucle de millora contínua fins assolir la plena acceptació.
Parteix d'un prototipatge inicial que va millorant a partir d'evolutius.
Es pressuposa que a cada finalització de volta de bucle, s'allibera un evolutiu.

Correspon a projectes on hi ha una alta participació del client o consumidor en el resultat final:
- open-source
- projectes orientats al prosumer (consumidor amb coneixements avançats del producte i el sector)

****

##Activitat 5: Model en espiral (iteratiu i incremental)

![Model Espiral](https://upload.wikimedia.org/wikipedia/commons/thumb/e/ec/Spiral_model_%28Boehm%2C_1988%29.svg/600px-Spiral_model_%28Boehm%2C_1988%29.svg.png)

**font** https://en.wikipedia.org/wiki/Spiral_model#/media/File:Spiral_model_(Boehm,_1988).svg

Itera els cicles dels slides vistos en el _Model incremental_, de manera que a la finalització d'un slide s'inicia el cicle següent.
En l'inici d'un cicle, s'incorpora el know-how i el feedback del cicle anterior, havent-se de corregir els errors i problemàtiques recollits en el cicle anterior.

En aquest cas els slides no son necessàriament entregables, sinó que poden ser capes d'una aplicació, o mòduls inter-dependents. 

Correspon especialment a projectes d'àmbit empresarial, que se serveixen per mòduls, amb funcionalitats i dades consumides en altres mòduls, com seria el cas de:
- aplicacions ERP (enterprise resource planning) 
- aplicacions de BI (business intelligence)

on les dades produïdes en un mòdul es consumeixen a d'altres mòduls.

> ##Nota:
A cada cicle la dificultat s'incrementa per la vinculació amb el producte de l'anterior cicle, cosa que implica respectar especificacions i dissenys heretats, i integrar nou desenvolupament a desenvolupament de partida, superant alhora els tests incrementals (tot allò nou, i tot allò que s'havia provat ja)

****

##Activitat 6: Model RAD Rapid Application Development

![Model RAD](https://upload.wikimedia.org/wikipedia/commons/5/5f/RADModel.JPG)

**font** https://en.wikipedia.org/wiki/Rapid_application_development#/media/File:RADModel.JPG

Planteja el cicle de vida del software com un procés de tres fases identificables
- Plantejament: On participen tots els equips, amb el propòsit de fer l'anàlisi, definir els requeriments i especificacions del projecte, establir el requisits i preparar els entorns de treball. 
- Producció: On participen equips de desenvolupament, de disseny i usabilitat, i de SQA (Software Quality Assurance)
- Alliberament: On participen tots els equips

Parteix d'una idea de negoci o de la necessitat de substituir un sistema
Durant la fase de producció s'intercanvien requeriments i especificacions menors entre equips, de manera que els requeriments són variables en funció de les possibilitats de desenvolupament o per contra de les necessitats de disseny i usabilitat.

Correspon a projectes petits o mitjans per a productes de nou llançament, on el client és la pròpia empresa (majoritàriament start-ups)
La metodologia més coneguda per a aplicar el model RAD és l'Agile (https://en.wikipedia.org/wiki/Agile_software_development), que parteix d'un [manifest](http://agilemanifesto.org/), que es podria resumir com:
```
"Individuals and interactions over processes and tools
Working software over comprehensive documentation
Customer collaboration over contract negotiation
Responding to change over following a plan"
```

> ##Nota:
Gran part del sector empresarial no entén el vertader significat de RAD. RAD i Agile no són un model i un mètode per a desenvolupar més ràpid,
són un model i un mètode adeqüats a desenvolupaments que sols poden ser ràpids (amb tot el què això implica i comporta, en termes de qualitat)

****

## Activitat 7: Model basat en components

![En cascada basat en components](http://centurion2.com/SEHomework/ComponentBasedSE/SystemLifeCycle.PNG)

**font** http://centurion2.com/SEHomework/ComponentBasedSE/ComponentBasedSE.php

![V basat en components](http://i1.rgstatic.net/figure/4163655_fig1_Fig.-1.-V-development-process-for-CBD./AS_104329558102018_1401885514169.page_003.image_01.png)

**font** https://www.researchgate.net/figure/4163655_fig1_Fig-1-V-development-process-for-CBD

![Espiral basat en components](http://image.slidesharecdn.com/lecture4-softwareprocessmodel2-141029064745-conversion-gate02/95/lecture-4-software-process-model-2-16-638.jpg?cb=1414565643)

**font** http://www.slideshare.net/sakhawatjameelk/lecture-4-software-process-model-2

El Model de cicle de vida basat en components, és un terme "efímer", donat que no existeix pròpiament un model, sinó que els models vistos poden integrar el model basat en components.
Quan un Model del cicle de vida del software es basa en components, implica dues coses:
- Arrossega implícitament els models dels components que incorpora, per tant, si un component ha patit un test d'integració en un entorn equivalent, és possible obviar el test d'integració per al component
- Imbrica ("imbrincar o superponer") fases paral·leles, de selecció, adeqüació, i test dels components.

La utilització de components té per objectiu reduir dràsticament la fase de desenvolupament.

L'aplicació d'aquest tipus de model, correspon especialment a projectes de software multipropisit, com són justament moltíssimes de les aplicacions web que es coneixen.

> ##NOTA:
El desenvolupament basat en components planteja un paradigma dual:
- La no-conflictivitat entre components
- La no-dependència de components

> Donat que, per una banda, no es preté que hi hagi components entrin en conflicte entre sí, a raó (generalment) de dependències conflictives o que no es poden satisfer;
i de l'altra banda, es preté que els components siguin intercanviables (substituibles) sense violar l'anterior condició.

> ##NOTA 2:
Afortunadament el desenvolupament basat en components amb tecnologies web compta amb eines **IMPRESCINDIBLES**, tals com :
* npm
* composer
* bower
* pip
* pear

****

## Activitat 8: Pautes per a escollir Model

## Quan és que he d'usar?

| **SEMPRE** | **CLIENTE PROSUMER** | **START-UPS** | ⬆⬆ **MONEY** | ⬇⬇ **ERROR TOLERANCE** | **CONCURRENCIA** | **RESTA CASOS** |
| ------ | ------ | ------ | ------ | ------ | ------ | ------ |
| COMPONENTS | ITERATIU | RAD | CASCADA | V | INCREMENTAL | ESPIRAL |
| Treballar amb components assegura poder oferir funcionalitats que no podríem desenvolupar d'altra manera. Fa fàcilment mantenible la nostra aplicació | El model iteratiu equival a fer un vestit a mida del client, aquest model integra la participació del client en l'assoliment de la solució | RAD és per a applicacions ràpides, com quasi tots els productes sobre els que s'edifiquen start-ups; que es composen per fer realitat una idea en molt poc temps i posar en marxa un negoci. Es tracta d'un procés obligatòriament breu (aconsellable 1 any màxim) | Quan es parteix de dotacions de temps i diners (projectes per a entitats de l'àmbit públic) és millor centrarse en cada fase i no dispersar esforços | Si atenem l'àmbit de la ingenieria civil, l'àmbit mèdico-hospitalari o l'àmbit financer, o corresponen al manteniment d'entorns de producció, el projecte queda clarament compromès a ser robust i fiable, per tant cal apuntalar aquests dos aspectes | Quan s'atenen projectes concurrents, el millor és aplicar el principi de "divideix i venceràs", el què permet atendre'ls concurrentment tots ells | Qualsevol cas que no sigui nítidament com els anteriors, és a dir quan no hi ha una dotació de diners de partida, però és viable dedicar-se al procés exclusivament, i quan el client no hi participarà, ni serà el nostre producte estrella, i es disposarà de marge per a la tolerància a errors (que seran corregits en el manteniment) |

# Exemples en el CV del professor
| [Portal intranet Endesa](http://www.dailymotion.com/video/x3mxoq7) | [Openy](www.openy.es) | [Tarjeta Ticket Restaurant](http://www.edenred.es/ticket-restaurant/tarjeta-restaurante) | [Shark control de accesos](http://softmachine.es/shark-net) | 
| ------ | ------ | ------ | ------ |
| 2 meses, en cada iteración (2 días) el cliente modificaba las especificaciones | 6 meses & go | 2o proyecto backoffice, duró 2 años | Alta fiabilidad y alto rendimiento, cada funcionalidad era un proyecto de 2 semanas, el test unitario (manual) duraba 2-3 días, y el de integración y rendimiento 1-2 días |


