function commande ()
{
    var PU = Number(prompt("Prix unitaire ?"));
    var QTECOM = Number(prompt("Quantité commandé ?"));
    var TOT = PU * QTECOM;
   
    
    console.log("prix unitaire = "+PU);
    console.log("quantié commandé = "+QTECOM);
    console.log("prix hors taxe = "+TOT);


    if (TOT>=100 && TOT<=200)
    {
        var REM = TOT * 0.05;
        console.log("La remise est de "+REM.toFixed(2));
        var PAR = TOT - REM;
        console.log("prix avec remise = "+PAR.toFixed(2));
        var rsmREM = "remise 5% (-"+REM+" €) soit "+PAR;
        console.log(rsmREM);
    }
    else if (TOT>200)
    {
        var REM = TOT * 0.1;
        console.log("La remise est de "+REM);
        var PAR = TOT - REM;
        console.log("prix avec remise = "+PAR);
        var rsmREM = "remise 10% (-"+REM.toFixed(2)+" €) soit "+PAR.toFixed(2)+" €";
    }
    else 
    {
        var PAR = TOT
        console.log("prix avec remise = "+PAR.toFixed(2)+" €");
        var rsmREM = "remise 0 ";
    }


    var FDP = 0.02 * PAR;
   console.log("frais de port virtuel : "+FDP.toFixed(2));
    if (PAR >= 500)
    {
        var PAP = PAR;
        var rsmPAP = "et frais de port = 0; à payer : "+PAP.toFixed(2)+" €";
    }
    else if (FDP > 6 && PAR <500)
    {
        var PAP = PAR + FDP;
        console.log(PAP);
        var rsmPAP = "et frais de port de 10% (de "+PAR.toFixed(2)+" €) soit +"+FDP.toFixed(2)+"; à payer : "+PAR.toFixed(2)+"+"+FDP.toFixed(2)+" = "+PAP.toFixed(2)+" €";
    }
    else if (FDP < 6 && PAR <500)
    {
        var PAP = PAR + 6;
        var rsmPAP = "et frais de port de 2% (de "+PAR.toFixed(2)+" €) soit +"+FDP.toFixed(2)+" mini 6 €; à payer : "+PAR.toFixed(2)+"+"+FDP.toFixed(2)+" = "+PAP.toFixed(2)+" €";
    }
   resumer = rsmREM+rsmPAP;
    return PAP;
}
var PAP = commande ()
console.log("Prix a payer = "+PAP.toFixed(2)+" €");
console.log(resumer);
