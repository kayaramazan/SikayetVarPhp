

//header fixed

document.getElementById("src").style.display = "none";
        
		window.onscroll = function() {sss()};
		function sss(){

			 if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
    document.getElementById("src").style.display = "block";
    document.getElementById("hh").style.height="50px";
    document.getElementById("hh").style.paddingTop="12px";
    document.getElementById("logo-img").style.height="48px";
    document.getElementById("logo-img").style.width="160px";
    document.getElementById("sikayet").style.padding="5px 28px";
		  document.querySelector(".go-top").style.display="block";
  } else {
    document.getElementById("src").style.display = "none";
    document.getElementById("hh").style.height="70px";
    document.getElementById("hh").style.paddingTop="20Px";
    document.getElementById("logo-img").style.height="59px";
    document.getElementById("logo-img").style.width="200px";
    document.getElementById("sikayet").style.padding="10px 28px";

		  document.querySelector(".go-top").style.display="none";
  }
              
		}
        // fixed heaeder end

        /*document.querySelector(".liste-1").style.display="none";
        document.querySelector(".liste-2").style.display="none";
        document.querySelector(".liste-3").style.display="none";*/

        //Filter start


        document.getElementById("comboTarih").style.display="none";
        document.getElementById("comboSektor").style.display="none";

        function combo(sname)
        {
            if(sname=="sektor")
            {
                if(document.getElementById("comboSektor").style.display == "block")
                    document.getElementById("comboSektor").style.display="none";
                else{
                    document.getElementById("comboTarih").style.display="none";
                    document.getElementById("comboSektor").style.display="block";
                }
            }
            else if(sname=="tarih")
            {
            if(document.getElementById("comboTarih").style.display=="block")
                document.getElementById("comboTarih").style.display="none";
            else{
            document.getElementById("comboTarih").style.display="block";
            document.getElementById("comboSektor").style.display="none";
                }
            }
           /* else if((document.getElementById("comboSektor").style.display=="block"))
                {
        document.getElementById("comboSektor").style.display="none";
                }*/

        }
        // Filter end

// Firma filter
  document.getElementById("t1").style.display="none";
           document.getElementById("s1").style.display="none";
        function opentab(evt,tabNAme)
        {
            if(tabNAme=="memnuniyet")
            {
                evt.currentTarget.className += " active";
                document.getElementById("tesekkur").classList.remove('active');
                document.getElementById("sikayet-sayisi").classList.remove('active');
                document.querySelector("#t1").style.display="none";
                document.querySelector("#s1").style.display="none";
                document.querySelector("#m1").style.display="block";

            }
            else if(tabNAme=="tesekkur")
            {

                evt.currentTarget.className += " active";
                document.getElementById("memnuniyet").classList.remove('active');
                document.getElementById("sikayet-sayisi").classList.remove('active');
                document.querySelector("#m1").style.display="none";
                document.querySelector("#s1").style.display="none";
                document.querySelector("#t1").style.display="block";
            }
            else if(tabNAme=="sikayet")
            {
                evt.currentTarget.className += " active";
                document.getElementById("tesekkur").classList.remove('active');
                document.getElementById("memnuniyet").classList.remove('active');
                document.querySelector("#t1").style.display="none";
                document.querySelector("#m1").style.display="none";
                document.querySelector("#s1").style.display="block";
            }

        }

        //Firma filter end

				//gotop
				function gotop(){

											document.documentElement.scrollTop=0;

				}
