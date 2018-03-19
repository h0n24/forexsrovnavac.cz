{{settings}}
  "language": "cs",
  "template": 1,
  "header": "main",
  "meta" : {
    "title": "Co je Hedging - Hedgeové strategie",
    "description": "",
    "keywords": "hedging"
  }
{{/settings}}

<div class="row">
<div class="col-md-9" role="main" markdown="1">


{{start}}
# Hedging

V dnešním díle si budeme povídat o jedné z technik obchodování na burze tkzv. **Hedging**. Co to vlastně znamená? **Jedná se o otevření opačné pozice ve stejném kontraktu**. Máte třeba nakoupeno Euro a pokud použijete hedgeeovou pozici, tak v určitém okamžiku Euro taky prodáte.

U Futures musíte použít stejný kontraktní měsíc. Hedge se někdy používá k ochránění svých pozic - to dělají třeba nákupčí.
{{/start}}


Představte si, že jako rafinerie potřebujete nakoupit za tři měsíce větší množství ropy. **Vaším cílem je nakoupit co nejlevněji**. To můžete udělat třeba opcí, ale o tom dnes řeč nebude. Takže když je cena relativně nízko, chtěli byste nakoupit, ale zatím nemůžete-kontrakt ještě nekončí. 

Takže vstoupíte na burze do dlouhé pozice - nakoupíte (spekulativně). To znamená, že když půjde cena nahoru, vyděláte, ale nakoupíte dráž (máte svou původní cenu). Když půjde cena dolů, jste na tom stejně. Prostě si zajistíte svoji požadovanou cenu. V praxi je to trochu jinak, ale jako příklad to snad bude stačit.


{{partial: fxpro}}

##A jak se dá využít hedgeování pozic v obchodování?

Různými způsoby. Nejprve je pořeba říci,že do takové techniky by se měl pouštět jen člověk, který má zkušenosti a ví, co dělá.

<b><big>`Pozice je dlouhodobě na jednom místě`</big></b> 

:   Z nějakého důvodu se kontrakt pohybuje nahoru a dolu třeba o 50 bodů a nemůže se dostat z tohoto kanálu. To je příležitost nastoupit obě pozice a vydělat tak na denních výkyvech na obě strany. Tato technika se používá u trhů ,které se pohybují spíše pomaleji a nevykazují velké denní rozpětí.


<b><big>`Chceme krátkodobě zmrazit naše pozice`</big></b> 

:   Věříte ,že cena Eura půjde nahoru. Jste v zisku,ale nechcete ho ještě vybírat a v rámci obchodního rozpětí máte nastaven vzdálenější stop-loss.Nechcete přijít o své zisky, ale zárověň věříte,že vyděláte ještě víc. Jedete třeba na dovolenou a týden se nemůžete trhům věnovat. Tak prostě nastoupíte obrácenou pozici a tím ji zmrazíte. Až se vrátíte,musíte vše zanalyzovat. Buď pozice uzavřete tak jak jsou-a zůstáváte v původním zisku, nebo se snažíte dosáhnout lepšího výsledku.

<b><big>`Náhrada příkazu stop-loss `</big></b>

:   Obdoba předešlého, jen s tím rozdílem,že trh stále sledujete. Protože věříte že ropa půjde nahoru, zadáváte místo SL obrácenou pozici. Když se trh obrátí proti vám,vydělácáte na jedné pozici ,ale druhá vám jde do mínusu. Pointou je strategie, kdy dostanete hedgovanou pozici do plusu a trh se obrátí vaším směrem. Používáme naopak ve volatilních trzích,kde nás běžný SL vyhodí okamžitě z trhu.

**HEDGE je riziková záležitost – používejte opravdu jen, pokud této strategii rozumíte.**

##Jaké jsou zápory, rizika a nevýhody hedgingu

Asi největší nepřítel je jako obvykle psychika. Když víte,proč nastupujete obrácenou pozici a máte plán, je to dobré. Největším problémem je jak postupovat dále,když je vaše hedgeová pozice v předpokládaném zisku (třeba 500 bodů). V jednom případě se odrazí zpět a vy začnete vydělávat i na druhé straně- to byl váš cíl, ale může se taky dále pohybovat proti vám. A tady máte jen dvě možnosti (díky za ně...). 

Ukončit vše a získat tak původní výsledek při vstupu do hedge,nebo hedgovat dále. A tady začne pracovat psychika. Nesmíte brát ohled na logický vývoj (cena se již nemůže dostat níže nebo výše, protože je na maximu...),ale prostě nastoupit další obrácenou pozici. 

Pokud to nezvládnete,může se stát,že z celé původně ziskové strategie se stane jedna velká ztráta.Když to zvládnete,dostanete mnohem větší zisk než obvykle. Takže tady se trochu přibližujeme k nesmyslné argumentaci některých laiků, že burza je jako kasino.(mimochodem přijít o peníze v kasinu,nebo podnikáním, je mnohem jednodušší než o ně přijít na burze).

##A jaké jsou výhody hedgingu

Když víte,co děláte,můžete vydělat mnohem více peněz. Broker vám neblokuje margin na obrácenou pozici - můžete obchodovat dva kontrakty za cenu jednoho(u komodit to některý broker neumí,nebo lze hedgovat jen v rámci jednoho dne). Můžete zabránit krátkodobým výkyvům trhu proti vaší pozici. Takže si musíte vybrat, jestli se vůbec do hedge pustit.

*Pzn: Ne všichni brokeři umožňují hedging, zeptejte se nejdříve vašeho brokera, zda vám tuhle techniku obchodování umožní.*

{{partial: xmcom}}




</div>
<div class="col-md-3" markdown="1">
<div class="well" markdown="1" style="margin-top: 2.5em">

{{partial: menu2}}

</div>


- - -

{{partial: fxpro-widget}}

- - -

{{partial: obrazek}}


</div>
</div>
