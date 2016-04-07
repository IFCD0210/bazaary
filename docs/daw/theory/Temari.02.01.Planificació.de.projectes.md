## Activitat 1: Planificació de projectes

### Dels LiveCycle Models al PRINCE2 i viceversa

#### Què és PRINCE2
PRINCE2 és l'acrònim de **PR**ojects **IN** **C**ontrolled **E**nvironments, version **2**. Es tracta d'una metodologia de gestió de projectes, orientada als objectius (el què es pot entendre com el producte en el cas del desenvolupament de software).

 > **NOTA** 
Per a conèixer la història o els principis sobre els que es regeix PRINCE2, es recomanen les lectures següents:
* https://en.wikipedia.org/wiki/PRINCE2#History
* https://www.axelos.com/best-practice-solutions/prince2/what-is-prince2

****
#### PRINCE2 i els Models de Cicle de Vida del Soft
PRINCE2 té el seu origen en l'àmbit IT, i per tant recorda als Models del Cicle de vida del Software. 

![Diagrama Timeline de Prince2](http://mplaza.pm/wordpress/wp-content/uploads/2015/07/The-PRINCE2-Timeline-Diagram.png)

> **NOTA2** 
A dia d'avui PRINCE2 s'aplica també als projectes software Agile (en què les interaccions  entre persones passen per damunt de les convencions i formalitats documentades).
Vegi's aquesta referència: https://www.axelos.com/best-practice-solutions/prince2/prince2-agile

****

#### Com funciona?
Funciona per, stages, documents i finalment rols en el projecte, 

##### Stages Principals (1. SU)
* SU (Starting UP): Fase pre-inicial, on es descriu el projecte (producte o servei), per mitjà d'un *Project Brief*, en el què hi intervenen el *Project Board* i el *Project Manager*. Abans de finalitzar aquesta fase, es planifica la següent.

> **NOTA**: Amb aquesta *stage* ens situaríem a l'inici de la fase de **conceptualització** del Model de Cicle de vida del Software

****

##### Stages Principals (2. IP)
* IP (Initiating a Project): Fase inicial d'un projecte. Es preparen les eines, protocols i documentació (i recursos de gestió documental) que s'utilitzaran en el curs del projecte, així com  També s'elabora una planificació general del projecte, que es dividirà en noves **Stages**.
S'hi acaba forjant el : **PROJECT INITIATION DOCUMENTATION** (PID).
I naturalment, es planifica (del tot) la següent fase.

> **NOTA**: En aquesta **stage** es definiràn requeriments, plaços, mètriques de qualitat, i metodologies de reporting d'incidències.... en altres paraules, ens trobarem ja inmersos/es en la fase de **Conceptualització** donat que s'establiran bona part dels  **Requeriments**, i molt probablement també s'hagi elaborat el **Disseny** de les Interfícies i d'alguns **Casos d'Ús**.

****

##### Stages Principals (3. Execució)
A partir de l'aprovació del PID, s'inicien de una a vàries *stages* consecutives "d'entrega de producte", el què es coneix com a **Execució d'un projecte**

Dins les stages d'Execució d'un projecte s'hi integren les següents stages:

* CS (Controlling a Stage): Fase en què es gestionen les incidències a mesura que sorgeixen, s'acumula know-how i s'apliquen correccions. Essencialment es controla l'avenç de l'Stage d'Entrega.
* DP (Directing a Project): Està molt relacionada amb la *CS*, ja que es prenen decisions de negoci/projecte que poden tenir origen en incidències escalades des de *CS*
* SB (Stage Boundaries): Fase última previa a la conclusió d'una Stage d'Entrega, en què s'estableixen ajustos en les subsegüents stages, i també es reporta l'estat de conclusió d'una stage.
* CP (Closing a Project): És la *SB* de la darrera stage d'entrega, amb què conclou l'execució. S'hi alliberen recursos, es planifiquen seguiments de producte i s'elabora una revisió general de l'execució (respecte del DIP).
* MP (Managing Product delivery): Fase troncal en la stage d'entrega. Consisteix en la supervisió i el seguiment de l'execució de la producció en sí mateixa, incloent l'acceptació prèvia de l'encàrrec i la gestió de l'entrega.

> **NOTA**:
CP és el símil de la fase de Manteniment en el model Waterfall
MP+SB equivalen en essència la conclusió de les fases de conceptualització (requeriments i disseny), implementació i validació.
CS i DP haurien de ser vistos com noves repeticions de la fase de conceptualització, amb el què són fàcilment concebibles a models com l'incremental, l'iteratiu o l'espiral, en què se situarien al final de cada iteració i al principi de la següent.

****

##### Rols Principals
* PB (Project Board): Responsable de la direcció del projecte. Li correspon prendre decisions de caire empresarials i comercials, que determinen principalment els Requeriments del producte i els canvis que pugui patir.
* PM (Project Manager): Responsable de la gestió i supervisió del projecte (planificació i execució). Li correspon definir el *Project Brief* (conjuntament amb el Project Board), així com el *Project Initiation Document*
* TM (Team Manager): Responsable principal de l'execució del projecte. És qui elabora el breakdown de cada stage d'entrega, i qui lidera la producció

##### Documentació (Project Initiation Document)
[*Project Initiation Document*](https://en.wikipedia.org/wiki/Project_Initiation_Documentation) és un document que recull entre d'altres l'**INITIAL PROJECT PLAN** que conté principalment:
* Assignments (o **milestones** o **epics**): Que són objectius a complir, o grans aplicacions o funcionalitats del producte
* **Schedule (o planificació pròpiament dita): Que és el desplegament sobre el calendari de la dedicació o esforç que es dedicarà a assolir els *milestones*, on se solen desglossar els milestones en fraccions menors: Tasques i subtasques, o Task-Lists i Tasks, o Stories i Tasks, etc ...**
* Human Resources: Quantitat efectiva d'esforç per persona i períodes, i possibles reforços externs
* Project Control: Concreció de la gestió de CS, com pot ser per exemple la periodicitat reunions, informes, integracions de codi, alliberament de releases o d'scrum sessions.
* Quality Control: Determinació dels mètodes de Validació i Verificació així com dels de Q&A, tant en els protocols com en el resultat entregable.

**font**: https://www.mindtools.com/pages/article/newPPM_85.htm

****

### Del Initial Project Plan a les Releases

Si entenem una _release_ com un producte "tancat" que s'entrega per donar compliment a uns objectius o per dotar a un software d'una sèrie de _features_ (o funcionalitats), ens preocuparà determinar com s'estableix sobre el calendari la "programació" o "planificació", de les activitats o tasques d'execució que s'han dut a terme per a "alliberar-la".

El desplegament clàssic d'una planificació sobre el temps es fa per mità del diagrama de Gantt, en què es llistes tasques, que es vinculen entre sí expressant dependències, i es valoren per mitjà d'una unitat de temps (ja sigui hores, dies, setmanes, etc...)

****

#### Diagrama de Gantt

![Diagrama de Gantt en MS Project](https://upload.wikimedia.org/wikipedia/en/7/73/Pert_example_gantt_chart.gif)

Sobre un diagrama de Gantt, a més a més, s'hi veuen representats tres conceptes més: * **slack**: El temps extraordinari de què pot gaudir una tasca, sense endarrerir l'inici d'aquelles que en depenen.
* **camí crític**: Representat (en vermell) com el camí que recórre la seqüència de tasques que no disposen d'slack.
**milestones**: Representats com moments temporals, en què tota una sèrie d'activitats o tasques hauran d'haver finalitzat.

****

#### PERT

PERT és la tècnica que s'utilitza per a produïr diagrames de Gantt.
Consisteix en construir una taula amb les tasques resultants d'un _breakdown_:

![Taula PERT](http://3.bp.blogspot.com/--Xitf0iwowM/VEZ7oqmHxCI/AAAAAAAAhAA/3okDbchzOB4/s1600/Gr%C3%A1fica_Adm_Operaciones_5.jpg)

I a partir d'aquí es calcula el temps estimat per cada tasca com
![equation](http://www.sciweavers.org/tex2img.php?eq=%28Optimista%2B4%2AProbable%2BPesimista%29%2F6&bc=White&fc=Black&im=jpg&fs=12&ff=arev&edit=)


