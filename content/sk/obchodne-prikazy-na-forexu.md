{{settings}}
  "language": "sk",
  "template": 1,
  "header": "main",
  "meta" : {
    "title": "Market Order, Limit order, Stop-Loss, Trailling stop - Obchodné príkazy na forexu",
    "description": "",
    "keywords": "Market Order, Limit order, Stop-Loss, Trailling stop"
  }
{{/settings}}

<div class="row">
<div class="col-md-9" role="main" markdown="1">

{{section}}

#Druhy obchodných príkazov na forexu

Keď sa prihlásite do svojej obchodnej platformy vo forexu, ktorú vám poskytne váš broker, uvidíte dva hlavné stĺpce u príslušných menových párov. Sú to stĺpca BUY (kúpiť) a SELL (predať) .To sú smery, ktorými sa môžete vydať a každý z nich ponúka niektoré z príkazov.

Drhy príkazov sú market order, entry stop, entry limit, ďalej potom trailing stop, close position, hedge position a close with hedge.

{{partial: fxpro}}

Market Order (nákup alebo predaj za cenu na trhu)

:   Týmto príkazom zadávate, že chcete nakúpiť alebo predať za aktuálnu cenu, ktorú práve vidíte - ktorá je na trhu. Počas niekoľkých milisekúnd sa váš príkaz zrealizuje a vy ste vstúpili alebo vystúpili z trhu. Proste len kliknete myšou a príkaz je vykonaný.

*Príklad: chcete nakúpiť pár EUR / USD a aktuálna cena je 12200. Pretože spread je 3 body, môžete kupovať za 12203 a predávať za 12200. To bude vaše plnenia v niektorej zo strán, keď zadáte príkaz za trh. Ak sa cena pohne, program vás na to upozorní a exekúcie nenastane - ak nechcete akceptovať novú cenu.*

Limit Order (nákup alebo predaj za cenu takú alebo lepšie)

:   Tento príkaz používate na vstup, keď chcete lepšiu cenu, než je momentálne na trhu. Čakáte, až si cena na trhu dôjde k vašej požadovanej, až potom nastane exekúcie do trhu.

*Príklad: očakávate, že na úrovni 12220 má EUR / USD rezistenciu-prekážku, od ktorej sa odrazí späť dole (momentálnej cena 12200). Takže chcete predať až sa cena dotkne 12220. Váš príkaz bude znieť predať (sell) za 12220 limit. A keď bude cena klesať, ako predpokladáte, zarábate peniaze.*

Limit sa tiež zvyčajne používa na vystúpenie z pozície-výberu zisku. Chceme vystúpiť z našej pozície na úrovni 12170 (zisk 50 bodov). Takže zadáte nákup (máme predaných a chceme vyrovnať pozíciu) za 12170 limit. To znamená: chcem opustiť trh, keď sa cena dostane na úroveň 12170 (nie skôr).


Stop Order (nákup alebo predaj až cena pretne vami požadovanú)

:   Pri vstupe do trhu tento príkaz používate, keď vidíte nejakú bariéru a chcete ísť do trhu až v prípade, že cena túto bariéru prekoná. Ale hlavne sa tento príkaz používa ako ochrana ziskov-zamedzenie strát (hovoríme o príkaze STOP LOSS).

*Príklad: máme predané za 12220 a chceme riskovať maximálne 30 bodov, keď sa cena obráti proti nám. Zadávame príkaz kúpiť (BUY) za 12250 stôp.*

Všetky príkazy môžete na forexu **zadávať súčasne**. To znamená, že keď zadáte vstup do trhu, môžete si zadať potencionálny zisk aj stratu. Ktorá situácia nastane skôr, tá je plnená, ostatné sa ruší.


Trailling STOP (posuvný stop)

:   Používate ako posuvnou ochranu vášho zisku - posuvný stop loss. Zvyčajne sa nastavuje v bodoch a funguje tak, že pokiaľ ide pozície vaším smerom, posúva sa za vami do zisku, ale pokiaľ ide pozície proti, zasekne sa a vyradí vás v závislosti na zadaných bodoch od danej chvíle obratu.

CLOSE POSITION (zatvárací príkaz)

:   Týmto príkazom uzavrite okamžite pozíciu za cenu na trhu. Kliknete a je hotovo.

HEDGE POSITION - (otvorí rovnakú pozíciu ktorú držíte, ale v opačnom smere)

CLOSE WITH HEDGE - (uzavrie existujúci pozíciu za trh a otvorí za trh pozíciu v opačnom smere). Toto sú špeciálne príkazy, ktoré sa hodia pre hedžové stratégie.


{{/section}}
</div>
<div class="col-md-3" markdown="1">
<div class="well" markdown="1" style="margin-top: 2.5em">


{{partial: menu-sk}}



</div>
<div class="container-fluid" markdown="1">


{{partial: fxprobanner}}

</div>
<div class="container-fluid" markdown="1">


</a>

</div>
</div>
</div>
