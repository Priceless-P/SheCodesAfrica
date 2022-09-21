jQuery(function($) {
    var states = {
 'Abia': ['Aba','Umuahia','Osisioma','Mgboko','Okpuala-Ngwa','Isiala Oboro','Omoba','Arochukwu','Bende','Ebem Ohafia','Nkwoagu Isuochi','Mbalano','Oke-Ikpe','Akwete'],
 'Adamawa': ['Yola','Mubi','Numan','Shelleng','Gulak','Michika','Gella','Maiha','Fufore','Girei','Guyuk','Lamurde','Ganye','Demsa','Jimeta','Jada','Mayo-Belwa','Gombi','Hong','Song','Toungo'],
 'Akwa Ibom':['Uyo', 'Ikot Abasi', 'Oron', 'Ikot Ekpene', 'Eyofin', 'Etinan', 'Eket', 'Afaha Offiong', 'Abat', 'Abak', 'Nung Udoe', 'Afaha Ikot Ebak', 'Nto Edino', 'Ikot Edibon', 'Okoroete', 'Oko Ita', 'Odot', 'Urua Inyang', 'Urue Offong', 'Utu Etim Ekpo', 'Itu', 'Mkpat Enin', 'Uquo', 'Ikot Akpa Nkuk' , 'Enwang' , 'Idu' , 'Okopedi' , 'Ikot Ibritam', 'Upenekang', 'Odoro Ikpe', 'Ibiaku Ntok Okpo'],
 'Anambra':['Onitsha', 'Awka', 'Awkuzu', 'Nteje', 'Umuleri', 'Aguleri', 'Neni', 'Ozubulu', 'Nnewi', 'Ojoto', 'Ukpo', 'Abagana', 'Ukpor', 'Ihiala', 'Ogidi', 'Nteje', 'Umunze', 'Atani', 'Aguata', 'Ajalli', 'Otuocha', 'Achalla', 'Anaku', 'Nzam'],
 'Bauchi': ['Bauchi', 'Azare', 'Yana', 'Giade', 'Jamaare', 'Misau', 'Warji', 'Dass', 'Dambam', 'Itas', 'Bogoro', 'Katagum', 'Tafawa Balewa', 'Darazo', 'Gamawa', 'Ningi', 'Kirfi', 'Alkaleri', 'Kafin Madaki', 'Toro'],
 'Bayelsa': ['Yenagoa', 'Ogbia', 'Sagbama', 'Kaiama', 'Nembe', 'Ekeremor', 'Oporoma', 'Twon-Brass'],
 'Benue': ['Makurdi', 'Otukpo', 'Vandeikya', 'Okpoga', 'Obarike-Ito', 'Wannune', 'Otukpa', 'Gboko', 'Igumale', 'Oju', 'Lessel', 'Adikpo', 'Tse-Agberagba', 'Sankera', 'Buruku', 'Ugba', 'Ugbokpo', 'Naka', 'Obagaji', 'Katsina-Ala', 'Gbajimba', 'Aliade'],
 'Borno': [ 'Maiduguri', 'Bama', 'Biu', 'Khaddamari', 'Gamboru', 'Briyel', 'Gwoza', 'Shani', 'Kwaya Kusar', 'Askira', 'Gubio', 'Azare', 'Dikwa', 'Rann', 'Chibok', 'Kukawa', 'Marte', 'Gudumbali', 'Monguno', 'Gajiram', 'Damboa', 'Damasak', 'Mafa', 'Benisheikh', 'Magumeri', 'Konduga', 'Mallam Fatori'],
 'Cross River': ['Calabar', 'Itigidi', 'Obudu', 'Ikot Nakanda', 'Abuochiche', 'Ugep', 'Ogoja', 'Obubra', 'Akpet Central', 'Okpoma', 'Sankwala', 'Effraya', 'Ikom', 'Boje', 'Odukpani', 'Akamkpa'],
 'Delta': ['Warri', 'Sapele', 'Burutu', 'Effurun', 'Asaba', 'Otor-Udu', 'Otu-Jeremi', 'Bomadi', 'Isiokolo', 'Ughelli', 'Oghara', 'Owa-Oyibu', 'Oleh', 'Patani', 'Agbor', 'Ozoro', 'Orerokpe', 'Obiaruku', 'Akwukwu-Igbo', 'Issele-Uku', 'Kwale', 'Ogwashi-Uku', 'Koko', 'Ogbe-Ijoh', 'Aboh'],
 'Ebonyi': ['Abakaliki', 'Afikpo', 'Isu', 'Obiozara', 'Nguzu Edda', 'Onuebonyi Echara', 'Isiaka', 'Onueke', 'Ezzamgbo', 'Ugbodo', 'Iboko', 'Ezillo'],
 'Edo': ['Benin City', 'Uselu', 'Idogbo', 'Ugbowo', 'Irrua', 'Uromi', 'Ekpoma', 'Auchi', 'Igarra', 'Agenebode', 'Igueben', 'Sabongida-Ora', 'Fugar', 'Ubiaja', 'Afuze', 'Abudu', 'Okada', 'Ehor', 'Iguobazuwa'],
 'Ekiti': ['Ado-Ekiti', 'Otun-Ekiti', 'Ikere-Ekiti', 'Aramoko-Ekiti', 'Ijero-Ekiti', 'Omuo-Ekiti', 'Ido-Ekiti', 'Ilawe-Ekiti', 'Efon-Alaaye', 'Iye-Ekiti', 'Ode-Ekiti', 'Igede-Ekiti', 'Ise-Ekiti', 'Emure-Ekiti', 'Oye-Ekiti', 'Ikole-Ekiti'],
 'Enugu': ['Enugu', 'Nsukka', 'Nkwo Nike', 'Ibagwa-Aka', 'Enugu-Ezike', 'Obollo-Afor', 'Ogbede', 'Agbani', 'Ndeaboh', 'Awgu', 'Udi', 'Aguobu-Owa', 'Oji River', 'Umulona', 'Amagunze', 'Ikem'],
 'Federal Capital Territory' : ['Abuja', 'Kuje', 'Bwari', 'Gwagwalada', 'Kwali', 'Abaji'],
 'Gombo' : ['Gombe', ' Kumo', ' Billiri', ' Kaltungo', ' Boh', ' Bajoga', ' Deba', ' Mallam Sidi', ' Talasse', ' Nafada', ' Dukku'],
 'Imo' : ['Owerri', 'Orlu', 'Umundugba', 'Amaigbo', 'Dikenafai', 'Nnenasa', 'Itu', 'Afor-Oru', 'Isinweke', 'Mgbidi', 'Umumma', 'Nwaorieubi', 'Iho', 'Aboh', 'Okwe', 'Nkwerre', 'Umuelemai', 'Awo-Idemili', 'Urualla', 'Okigwe', 'Umuguma', 'Oguta', 'Umuneke-Ngor', 'Egbema'],
 'Jigawa': ['Dutse', 'Hadejia', 'Gumel', 'Kazaure', 'Auyo', 'Kafin Hausa', 'Kiri Kasamma', 'Roni', 'Gwiwa', 'Ringim', 'Birnin Kudu', 'Karkarna', 'Malam Madori', 'Miga', 'Taura', 'Jahun', 'Gantsa', 'Maigatari', 'Kiyawa', 'Kaugama', 'Gwaram', 'Gagarawa', 'Guri', 'Garki', 'Babura', 'Sule Tankarkar', 'Birniwa'],
 'Kaduna': ['Kaduna', 'Zaria', 'Makera', 'Sabon Gari', 'Kwoi', 'Hunkuyi', 'Makarfi', 'Kaura', 'Ikara', 'Giwa', 'Saminaka', 'Maigana', 'Turunku', 'Zonkwa', 'Kafanchan', 'Anchau', 'Gwantu', 'Kagarko', 'Kauru', 'Kujama', 'Kachia', 'Kajuru','Birnin Gwari'],  'Kano': ['Kano', 'Ungogo', 'Kumbotso', 'Gezawa', 'Dawakin Kudu', 'Kura', 'Wudil', 'Koguna', 'Dawakin Tofa', 'Minjibir', 'Madobi', 'Garun Malam', 'Gwarzo', 'Kabo', 'Rimin Gado', 'Tofa', 'Bichi', 'Bagwai', 'Albasu', 'Tsanyawa', 'Warawa', 'Karaye', 'Rano', 'Bunkure', 'Kibiya', 'Garko', 'Takai', 'Kiru', 'Zakirai', 'Sumaila', 'Shanono', 'Rogo', 'Dambatta', 'Bebeji', 'Ajingi', 'Gaya', 'Tudun Wada', 'Kunchi', 'Ririwai'],   'Katsina': ['Katsina', 'Mai’Adua', 'Funtua', 'Zango', 'Daura', 'Sandamu', 'Batagarawa', 'Dutsi', 'Bindawa', 'Dandume', 'Rimi', 'Dutsin-Ma', 'Charanchi', 'Malumfashi', 'Baure', 'Danja', 'Kusada', 'Mani', 'Bakori', 'Ingawa', 'Matazu', 'Sabuwa', 'Kurfi', 'Kafur', 'Musawa', 'Batsari', 'Mashi', 'Kaita', 'Kankia', 'Kankara', 'Jibia', 'Dan Musa', 'Safana', 'Faskari'],
 'Kebbi': ['Zuru', 'Kalgo', 'Jega', 'Aliero', 'Gwandu', 'Argungu', 'Bunza', 'Besse', 'Maiyama', 'Dakingari', 'Shanga', 'Ribah', 'Augie', 'Sakaba', 'Kamba', 'Wara', 'Mahuta', 'Bagudo', 'Kangiwa', 'Yelwa'],
 'Kogi': ['Idah', 'Lokoja', 'Akpafa', 'Obangede', 'Ogaminana', 'Okene', 'Ankpa', 'Okpo', 'Iyara', 'Odo-Ere', 'Ugwolawo', 'Onyedega', 'Isanlu', 'Adogo', 'Koton-Karfe', 'Ajaka', 'Dekina', 'Oguma', 'Abejukolo', 'Kabba', 'Mopa'],
 'Kwara': ['Ilorin', 'Offa', 'Fufu', 'Ilemona', 'Iloffa', 'Omu-Aran', 'Araromi-Opin', 'Owu-Isin', 'Lafiagi', 'Afon', 'Share', 'Patigi', 'Oke-Oyi', 'Bode Saadu', 'Kosubosu', 'Kaiama'],
 'Lagos': ['Lagos', 'Apapa', 'Epe', 'Ajegunle', 'Oshodi', 'Somolu', 'Ifako', 'Surulere', 'Mushin', 'Ebute-Metta', 'Ojota', 'Ikotun', 'Ikeja', 'Agege', 'Ojo', 'Festac Town', 'Ikoyi', 'Ikorodu', 'Badagry', 'Akodo'],
 'Nassarawa': ['Lafia', 'Keffi', 'Obi', 'Akwanga', 'Nasarawa Egon', 'Karu', 'Keana', 'Wamba', 'Garaku', 'Doma', 'Toto', 'Awe', 'Nasarawa'],
 'Niger': ['Minna', 'Bida', 'Kontagora', 'Suleja', 'Sabon Wuse', 'Enagi', 'Maikunkele', 'Gawu Babangida', 'Sarkin Pawa', 'Paiko', 'Lemu', 'Agaie', 'Katcha', 'Mokwa', 'Rijau', 'Kutigi', 'Kagara', 'Nasko', 'Kuta', 'Wushishi', 'Lapai', 'Agwara', 'Bangi', 'Mashegu', 'New Bussa'],
 'Ogun': ['Abeokuta', 'Ijebu-Ode', 'Ifo', 'Ikenne', 'Ota', 'Atan', 'Shagamu', 'Isara', 'Ijebu-Igbo', 'Ipokia', 'Ilaro', 'Odogbolu', 'Owode', 'Ayetoro', 'Itori', 'Abigi', 'Odeda', 'Imeko', 'Ogbere'],
 'Ondo': ['Ikare', 'Akure', 'Owo', 'Ondo', 'Igbara-Oke', 'Oka', 'Ile-Oluji', 'Oke-Agbe', 'Isua', 'Okitipupa', 'Bolorunduro', 'Igbekebo', 'Igbokoda', 'Iju', 'Ita-Ogbolu', 'Ode-Irele', 'Owena', 'Ore', 'Ifon'],
 'Osun': ['Ile-Ife', 'Osogbo', 'Iwo', 'Ilobu', 'Ilesa', 'Ifon', 'Iragbiji', 'Ikirun', 'Ile-Ogbo', 'Okuku', 'Otan Ayegbaju', 'Apomu', 'Ikire', 'Ejigbo', 'Oke-Ila', 'Ijebu-Jesa', 'Ede', 'Awo', 'Ibokun', 'Bode Osi', 'Ifetedo', 'Ila Orangun', 'Ipetumodu', 'Gbongan', 'Iperindo', 'Osu'],
 'Oyo': ['Ibadan', 'Ogbomoso', 'Oyo', 'Iseyin', 'Egbeda', 'Akanran', 'Iyana-Ofa', 'Moniya', 'Okeho', 'Idi-Ayunre', 'Igbo-Ora', 'Jobele', 'Iresa-Adu', 'Eruwa', 'Ajaawa', 'Kisi', 'Igboho', 'Ido', 'Otu', 'Ayete', 'Igbeti', 'Ikoyi-Ile', 'Ago-Amodu', 'Saki', 'Iwere-Ile', 'Tede'],
 'Pleateau': ['Jos', 'Bukuru', 'Riyom', 'Barkin Ladi', 'Langtang', 'Mangu', 'Tunkus', 'Bassa', 'Bokkos', 'Angware', 'Pankshin', 'Kwal', 'Baap', 'Shendam', 'Mabudi', 'Dengi', 'Wase'],
 'Rivers':['Port Harcourt', 'Okrika', 'Kpor', 'Buguma', 'Rumuodomaya', 'Ogu', 'Nchia', 'Saakpenwa', 'Ngo', 'Opobo', 'Akinima', 'Bori', 'Ahoada', 'Abua', 'Bonny', 'Omoku', 'Afam', 'Okehi', 'Eberi', 'Abonnema', 'Degema', 'Isiokpo', 'Emuoha'],
 'Sokoto':['Sokoto', 'Bodinga', 'Wamako', 'Wurno', 'Gwadabawa', 'Illela', 'Binji', 'Kware', 'Tambuwal', 'Silame', 'Dange', 'Yabo', 'Shagari', 'Gada', 'Goronyo', 'Kebbe', 'Sabon Birni', 'Isa', 'Rabah', 'Tureta', 'Gidan Madi', 'Balle'],
 'Taraba':['Jalingo', 'Wukari', 'Zing', 'Pantisawa', 'Takum', 'Gembu', 'Mutum Biyu', 'Donga', 'Lissam', 'Sunkani', 'Ibi', 'Lau', 'Karim Lamido', 'Bali', 'Baissa', 'Serti'],
 'Yobe':['Damaturu', 'Gashua', 'Nguru', 'Potiskum', 'Jajimaji', 'Sabon Garin Nangere', 'Fika', 'Damagum', 'Jakusko', 'Machina', 'Bara', 'Buni Yadi', 'Geidam', 'Dapchi', 'Yusufari', 'Kanamma', 'Babban Gida'],
 'Zamfara':['Gusau', 'Kaura Namoda', 'Birnin Magaji', 'Shinkafi', 'Bungudu', 'Tsafe', 'Zurmi', 'Maradun', 'Talata Mafara', 'Bakura', 'Bukkuyum', 'Gummi', 'Anka', 'Maru'],

    }

    var $gndr = $('#gtr');
    $('#states').change(function () {
 var GNDR = $(this).val(), gndrs = states[GNDR] || [];

 var html = $.map(gndrs, function(gndr){
 return '<option value="' + gndr + '">' + gndr + '</option>'
 }).join('');
 $gndr.html(html);$gndr.append(new Option("Select Town/City", "0"));$gndr.val("0");
    });
});
