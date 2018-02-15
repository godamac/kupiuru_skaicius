# kupiuru_skaicius

Aprašyta funkcija grąžina minimalų kupiūrų skaičių.

Tam naudojamas ciklas foreach bei funkcijos floor ir fmod.

Kiekvienos ciklo iteracijos metu tikrinama ar pinigų suma keitimui yra dali iš kupiūros nominalo reikšmės. Jos imamos paeiliui pradedant nuo didžiausios iš kupiūrų nominalo masyvo.

Jeigu taip - prie minimalaus kupiūrų skaičiaus pridedama sveikoji rezultato dalis, o pinigų suma keitimui prilyginama likusiam likučiui.

Ciklas nutraukiamas kai pinigų suma keitimui tampa lygi nuliui.
