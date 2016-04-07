## ACTIVITAT 1: REQUISITS
#### Què és un Requisit?
Un requisit o requeriment és una concreció de les :
* Propietats
* Funcionalitats
* Restriccions
(etc..)

que ha de tenir un producte software a projectar i/o desenvolupar.

#### Com s'obtenen?
El procés d'obtenció de requisits s'emmarca dins la fase (del cicle de vida del Software) de "Concepció" o "Anàlisi" d'un producte Software, i parteix d'una demanda (amb major o menor concreció inicial), on es recull una descripció global d'allò que es pretén aconseguir.
El document **Project Product Description** ad hoc al document **Project Brief**, que s'elaboren en la fase de STARTING UP (**SU**) en la metodologia *PRINCE2* serien documents amb els quals es podria iniciar una obtenció de **requisits**.

El procés continua amb un **procés de captura**, en què s'empren metodologies, per tal d'obtenir **documentació d'especificació** del producte.


#### Tipologia de requisits
1. d'**Usuari**:
Són aquells que s'extreuen directament del Project Product Description.
Són els trets principals del producte, i se solen representar amb descripcions breus i diagrames senzills
2. de **Sistema**:
Són més detallats i específics, expliquen (exactament) el _**com**_ a més a més del _**què**_. En diferenciem dos subtipus:
	1. **Funcionals** (o "explícits"): Descriuen funcionalitats del producte, explicant el **comportament** del producte amb l'usuari/a i amb l'entorn.
	> Per exemple, la descripció de quin és el circuït de benvinguda d'un/a usuari/a quan inicia sessió, i com queda registrat l'accés al sistema
	2. **No funcionals** (o "implícites"): Descriuen com es desitja que es comporti un producte i/o les seves funcionalitats, en termes restrictius: "++què **no** es vol que passi++", o en termes coercitius: "++cada quan s'haurà de realitzar una còpia de seguretat o una síncronització d'informació++" o "++a quin **standard** o a quina **convenció** s'ha de cenyir un funcionament del programa, un protocol de comunicació o un format de dades++".
    > Per exemple, la concreció de què un usuari/a no podrà iniciar sessió des de més d'un lloc de treball alhora.

	De **no funcionals** n'hi ha un tipus específic i diferenciable de la resta: **EL REQUISIT ADDICIONAL**, que supra-regeix totes les fases del cicle de vida del software en l'execució d'un projecte, i en totes les seves facetes (eines, metodologia, llenguatge, components software, documentació, entorn de proves o entorn de desplegament); i que pot venir donat en alguna de les següents maneres:
       - Requisit d'**interfície**: Que determina **com** ha de ser un element extern al sistema que es desenvolupi, com poden ser els formats dels fitxers o la composició i disseny de les pantalles.
       > En el cas d'una arquitectura client-servidor, el client és la interfície del servidor i les seves pantalles devenen requisits adicionals.

       - Requisit de **restricció d'implementació**: Que determina **conforme a què** haurà de dur-se a terme la implelmentació, respecte d'una sèrie d'aspectes tals com:
         * els standards o convencions a emprar
         * les eines, el llenguatge de programació i els components a utilitzar
         * els protocols de comunicació a obeïr

       - Requisit d'**arquitectura** o físic: Que ve principalment determinat per aspectes provinents del desplegament i posta en marxa del producte, i que tenen connotació directament tecnològica, com són el maquinari, el sistema operatiu


## ACTIVITAT 2: PROCÉS DE CAPTURA DE REQUISITS
### 1- Enumeració de característiques:
_A partir de la **visió global** es realitza un brainstorming d'aspectes i característiques que hauria de tenir el producte a més a més de les donades. Hi participen Analistes i Desenvolupadors/es. S'empra l'expertise i l'experiència (coneixements aplicats en la producció de software per una banda, i coneixements a nivell d'experiència d'usuari/a per l'altra), especialment com a base per a determinar les característiques._
Les característiques s'enumeren en fitxes, que venen a tenir aquest aspecte:

| Característica | Valor |
|--------|--------|
| Estat: | [Proposat &#124; Aprovat &#124; Inclòs] |
| Cost (estimat): | unitat de temps o esforç |
| Prioritat: | [**MoSCoW**]&#124;[Core &#124; Critical &#124; Must have &#124; Nice to have &#124; Issue &#124; Bug &#124; Blocking] |
| Risc associat: | Unitat de mesura de risc* |

> (*) Nota: L'escala de risc l'hem de determinar pel nostre compte, considerant quins factors inherents en una característica poden posar en perill el producte.
Per exemple, l'ús d'un component depreciat (_deprecated_), o la utlització d'una norma o tecnologia en desús.

### 2- Comprensió del context:
#### Visió gobals dels requisits
S'elabora una visió global dels conceptes que es barallen en la captura de requisits, per mitjà d'un **GLOSARI**.
El glosari engloba tots els conceptes importants que es deriven de la comprensió del producte, i té per finalitat ser emprat amb terceres persones, externes al projecte, per a explicar la idea del producte.

> NOTA:
> El glosari és un document informal, sense una notació determinada, i pot elaborar-se emprant un document de texte amb un llistat de termes i la seva descripció i/o un mapa mental que conecti els conceptes que guarden relació entre sí.

#### MODELAT del producte
Existeixen dos grans tipus de modelat que es realitzen (habitualment) sota la **notació UML** (Unified Modeling Language). Aquests dos tipus de modelat no tenen una precedència explícita, però es recomana emprar-los en el mateix ordre en què són presentats a continuació (quan no es té experiència en l'anàlisi), i en ordre invers (quan es té experiència en l'anàlisi):

##### **MODEL DE NEGOCI**
Descriu per mitjà d'un **Model UML de Casos d'Ús** i dels **Diagrames dactivitat** (o diagrames de flux) que se'n deriven, quines interaccions existeixen entre els/les usuaris/es del sistema i el sistema. I de la mateixa manera, entre el sistema i d'altres sistemes externs, i entre el sistema i les seves parts més importants.
> Vegi's Refman.pdf a la pàgina 64

Exemple de Diagrama d'un Cas d'ús
(**font** http://www.tutorialspoint.com/uml/)
![Use Case Diagram](http://www.tutorialspoint.com/uml/images/uml_use_case_diagram.jpg)

Exemple de Diagrama d'activitat
(**font** http://www.tutorialspoint.com/uml/)
![Activity Diagram](http://www.tutorialspoint.com/uml/images/uml_activity_diagram.jpg)

##### **MODEL DE DOMINI**
Descriu per mitjà d'un **Model UML de Classes** quins conceptes i quina informació contindrà el sistema i quina relació guarden entre sí.
> Vegi's Refman.pdf a la pàgina 41)

Exemple de Diagrama de Classes
(**font** http://www.tutorialspoint.com/uml/)
![Activity Diagram](http://www.tutorialspoint.com/uml/images/uml_class_diagram.jpg)


### 3- Distribució dels requisits:

#### Requisits funcionals
A partir de les característiques desplegades en fitxes s'identifiquen els requisits funcionals i s'organitzen segons criteris de PRIORITZACIÓ determinats, que es podrien concretar en:
	- VALOR: Com a mesura d'importància basat en l'escala de prioritat de la característica i com a mesura de benefici econòmic per a l'organització darrera el projecte
	- COST: Com a mesura de l'esforç en termes de recursos i de temps, i la contabilització econòmica del mateix
	- RISC: Com a mesura de la determinació en la consecució del projecte

Per a ajudar a la priorització dels requisits funcionals s'utilitza una espècie de matriu _DAFO_ (Debilitats, Amenaces, Fortaleses, Oportunitats; _SWOT_ en anglès),  on es disposen els requisits.
La matriu té el Risc en les Ordenades (eix vertical) i la ratio Cost-Valor (o senzillament el Valor si es prefereix) en les Abscisses (eix horitzontal).

Un exemple de taula _SWOT_ molt pràctica en seria:

![Risk-Value SWOT Table](http://foldingburritos.com/wp-content/uploads/2015/11/value-vs-risk.png)

#### Requisits no funcionals
Es determinen a partir de les característiques no seleccionades en la fase anterior, i també com a conseqüencia de l'anàlisi en la priorització.
Els requisits no funcionals adicionals de tipus físic o arquitectònic seran prioritzats per damunt de cap altre requisit i recalcats en la taula _SWOT_.
La resta de requisits no funcionals seran incorporats a l'especificació de cada requisit no funcional.

### 4- Preparació del projcte
Els requisits funcionals i els no funcionals esdevenen els **milestones** o **epics** que marcaran l'execució del projecte, així com de la seva **seqüenciació** a partir de la **priorització** establerta.

### 5- Preparació de l'especificació
Els requisits funcionals, finalment s'associen amb els casos d'ús apareguts en el **MODEL DE NEGOCI** i serviran juntament amb els diagrames de flux per a especificar-los.
D'altra banda, els requisits no-funcionals s'especificaran com a requisits **ESPECIALS** de cada cas d'ús, emmarcant-los en un requadre en una zona visible del document d'especificació.

[^]: Segons https://tools.ietf.org/html/rfc2119 les categories (per als RFC) haurien de ser "MUST", "MUST NOT", "REQUIRED", "SHALL", "SHALL NOT" indicant requeriments de primer nivell de prioritat.
En segon terme s'establirien "SHOULD", "SHOULD NOT" i "RECOMMENDED".
I finalment, indicant una prioritat inferior a les anteriors "MAY" i "OPTIONAL".