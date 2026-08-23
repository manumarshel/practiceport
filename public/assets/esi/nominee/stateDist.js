var states = new Array(
  new Array("Andaman and  Nicobar", 102),
  new Array("Andhra Pradesh", 23),
  new Array("Arunachal Pradesh", 24),
  new Array("Assam", 25),
  new Array("Bihar", 26),
  new Array("Chandigarh", 32),
  new Array("Chattishgarh", 27),
  new Array("Dadra and Nagar Haveli ", 101),
  new Array("Daman and  Diu  ", 100),
  new Array("Delhi", 20),
//new Array("Dummy State", 99),
  new Array("Goa", 28),
  new Array("Gujarat", 29),
  new Array("Haryana", 30),
  new Array("Himachal Pradesh", 1),
//new Array("IP State", 98),
  new Array("Jammu & Kashmir", 2),
  new Array("Jharkhand", 3),
  new Array("Karnataka", 21),
  new Array("Kerala", 4),
  new Array("Lakshadweep", 103),
  new Array("Madhya Pradesh", 5),
  new Array("Maharashtra", 6),
  new Array("Manipur", 7),
  new Array("Meghalaya", 8),
  new Array("Mizoram", 9),
  new Array("Nagaland", 10),
  new Array("Odisha", 11),
  new Array("Pondicherry", 12),
  new Array("Punjab", 13),
  new Array("Rajasthan", 14),
  new Array("Sikkim", 15),
  new Array("Tamilnadu", 16),
  new Array("Telangana", 105),
  new Array("Tripura", 17),
  new Array("Uttar Pradesh", 18),
  new Array("Uttarakhand", 31),
  new Array("West Bengal", 22),
  new Array("Outside India", 104)
  );
var districts = new Array(
  new Array(
//new Array("Nicobar",638), // MRID 2971
//new Array("North And Middle Andaman",636), // MRID 2971
   new Array("South Andaman", 637),
   new Array("Nicobar", 755),
   new Array("North and Middle Andaman", 756)
   

  ),
  new Array(

       new Array("Ananthpuram", 644),
   new Array("Chitoor", 626),
   new Array("East Godawari", 480),
   new Array("Guntur", 645),
   new Array("Kadapa", 266),
   new Array("Krishna", 336),
   new Array("Kurnool", 342),
   new Array("Nellore", 344),
   new Array("Prakasam", 416),
   new Array("Srikakulam", 457),
   new Array("Vishakapatnam", 462),
   new Array("Vizianagaram", 469),
   new Array("West Godawari", 487)

  ),
  new Array(
      new Array("Anjaw", 506),
   new Array("Changlang", 511),
   new Array("Dibang Valley", 509),
   new Array("East Kameng", 514),
   new Array("East Siang", 692),
   new Array("Kurung Kumey", 686),
   new Array("Lohit", 516),
   new Array("Longding", 687),
   new Array("Lower Dibang Valley", 688),
   new Array("Lower Subansiri", 521),
   new Array("Papum Pare", 519),
   new Array("Tawang", 658),
   new Array("Tirap", 523),
   new Array("Upper Siang", 689),
   new Array("Upper Subansiri", 525),
   new Array("West Kameng", 9),
   new Array("West Siang", 690),
   new Array("Kra Daadi", 757),
   new Array("Lower Siang", 758),
   new Array("Namsai", 759),
   new Array("Siang", 760)
   

  ),
  new Array(
      new Array("Baksa", 691),
   new Array("Barpeta", 59),
   new Array("Bongaigaon", 63),
   new Array("Cachar", 61),
   new Array("Chirang", 685),
   new Array("Darrang", 65),
   new Array("Dehmaji", 66),
   new Array("Dhubri", 67),
   new Array("Dibrugarh", 71),
   new Array("Dima Hasao", 693),

   new Array("Goalpara", 73),
   new Array("Golaghat", 77),
   new Array("Hailakandi", 75),
   new Array("Jorhat", 80),
   new Array("Kamrup", 662),
   new Array("Kamrup Metropolitan", 694),
   new Array("Karbi Anglong", 81),
   new Array("Karimganj", 84),
   new Array("Kokrajhar", 82),
   new Array("Lakhimpur", 86),
   new Array("Marigaon", 88),
   new Array("Nagaon", 90),
   new Array("Nalbari", 92),
   new Array("Sibsagar", 96),
   new Array("Sonitpur", 94),
   new Array("Tinsukia", 98),
   new Array("Udalguri", 695)

  ),
  new Array(
       new Array("Araria", 287),
   new Array("Arwal", 727),
   new Array("Aurangabad", 288),
   new Array("Banka", 289),
   new Array("Begusarai", 290),
   new Array("Bhagalpur", 291),
   new Array("Bhojpur", 292),
   new Array("Buxar", 293),
   new Array("Darbhanga", 294),
   new Array("Gaya", 295),
   new Array("Gopalganj", 296),
   new Array("Jamui", 297),
   new Array("Jehanabad", 298),
   new Array("Kaimur", 299),
   new Array("Katihar", 300),
   new Array("Khagaria", 301),
   new Array("Kishanganj", 302),
   new Array("Lakhisarai", 304),
   new Array("Madhepura", 305),
   new Array("Madhubani", 306),
   new Array("Munger", 307),
   new Array("Muzaffarpur", 308),
   new Array("Nalanda", 309),
   new Array("Nawada", 310),
   new Array("Pashchim Champaran", 311),
   new Array("Patna", 312),
   new Array("Purba Champaran", 313),
   new Array("Purnia", 314),
   new Array("Rohtas", 315),
   new Array("Saharsa", 316),
   new Array("Samastipur", 317),
   new Array("Saran", 318),
   new Array("Sheikhpura", 319),
   new Array("Sheohar", 320),
   new Array("Sitamarhi", 321),
   new Array("Siwan", 322),
   new Array("Supaul", 323),
   new Array("Vaishali", 324)

  ),
    new Array(
    new Array("Chandigarh", 628)
  ),
   new Array(
         new Array("Baloda", 728),
   new Array("Baloda Bazar", 729),
   new Array("Balrampur", 730),
   new Array("Bastar", 360),
   new Array("Bemetara", 731),
   new Array("Bilaspur", 361),
   new Array("Dantewada", 362),
   new Array("Dhamtari", 363),
   new Array("Durg", 364),
   new Array("Gariaband", 732),
   new Array("Janjgir-Champa", 365),
   new Array("Jashpur", 366),
   new Array("Kabirdham", 368),
   new Array("Kanker", 367),
   new Array("Kondagaon", 733),
   new Array("Korba", 369),
   new Array("Koriya", 370),
   new Array("Mahasamund", 371),
   new Array("Mungeli", 734),
   new Array("Narayanpur", 697),
   new Array("Raigarh", 372),
   new Array("Raipur", 373),
   new Array("Rajnandgaon", 374),
   new Array("Sukma", 735),
   new Array("Surajpur", 698),
   new Array("Surguja", 375),
   new Array("Bijapur", 696)


  ),
  new Array(
    new Array("Dadra and Nagar Haveli", 639)
  ),
  new Array(
    new Array("Daman", 641),
    new Array("Diu", 642)
  ),
  new Array(
      new Array("Central Delhi", 699),
   new Array("East Delhi", 700),
   new Array("New Delhi", 139),
   new Array("North Delhi", 701),
   new Array("North East Delhi", 702),
   new Array("North West Delhi", 703),
   new Array("South Delhi", 704),
   new Array("South West Delhi", 705),
   new Array("West Delhi", 706),
   new Array("Shahdara", 761),
   new Array("South East Delhi", 762)

  ),

  new Array(
    new Array("North Goa", 376),
    new Array("South Goa", 377)
  ),
  new Array(
       new Array("Ahmedabad", 378),
   new Array("Amreli District", 379),
   new Array("Anand", 380),
   new Array("Aravalli", 707),
   new Array("Banaskantha", 381),
   new Array("Bharuch", 382),
   new Array("Bhavnagar", 383),
   new Array("Botad", 736),
   new Array("Chote Udepur", 737),
   new Array("Dahod", 384),
   new Array("Devbhumi Dwarka", 738),
   new Array("Gandhinagar", 385),
   new Array("Gir Somnath", 739),
   new Array("Jamnagar", 386),
   new Array("Junagadh", 387),
   new Array("Kheda", 388),
   new Array("Kutch", 389),
   new Array("Mahisagar", 740),
   new Array("Mehsana", 390),
   new Array("Morbi", 741),
   new Array("Narmada", 391),
   new Array("Navsari", 392),
   new Array("Panchmahal", 393),
   new Array("Patan", 394),
   new Array("Porbandar", 395),
   new Array("Rajkot", 396),
   new Array("Sabarkantha", 397),
   new Array("Surat", 398),
   new Array("Surendranagar", 399),
   new Array("Tapi", 708),
   new Array("The Dangs", 400),
   new Array("Vadodara", 401),
   new Array("Valsad", 402)

  ),
  new Array(
      new Array("Ambala", 403),
   new Array("Bhiwani", 404),
   new Array("Faridabad", 405),
   new Array("Fatehabad", 406),
   new Array("Gurgaon", 407),
   new Array("Hissar", 408),
   new Array("Jhajjar", 409),
   new Array("Jind", 410),
   new Array("Kaithal", 411),
   new Array("Karnal", 412),
   new Array("Kurukshetra", 413),
   new Array("Mahendragarh", 414),
   new Array("Mewat", 417),
   new Array("Palwal", 418),
   new Array("Panchkula", 419),
   new Array("Panipat", 420),
   new Array("Rewari", 421),
   new Array("Rohtak", 422),
   new Array("Sirsa", 423),
   new Array("Sonepat", 424),
   new Array("Yamuna Nagar", 425),
   new Array("Charkhi Dadri", 763)

  ),
  new Array(
       new Array("Bilaspur", 347),
   new Array("Chamba", 348),
   new Array("Hamirpur", 350),
   new Array("Kangra", 351),
   new Array("Kinnaur", 353),
   new Array("Kulu", 352),
   new Array("Lahaul And Spiti", 354),
   new Array("Mandi", 355),
   new Array("Shimla", 356),
   new Array("Sirmaur", 357),
   new Array("Solan", 359),
   new Array("Una", 358)

  ),

  new Array(
      new Array("Anantnag", 582),
   new Array("Badgam", 4),
   new Array("Bandipore", 2),
   new Array("Baramula", 6),
   new Array("Doda", 8),
   new Array("Ganderbal", 709),
   new Array("Jammu", 11),
   new Array("Kargil", 13),
   new Array("Kathua", 15),
   new Array("Kishtwar", 710),
   new Array("Kulgam", 711),
   new Array("Kupwara", 16),
   new Array("Leh", 19),
   new Array("Poonch", 17),
   new Array("Pulwana", 23),
   new Array("Rajauri", 21),
   new Array("Ramban", 712),
   new Array("Reasi", 679),
   new Array("Samba", 25),
   new Array("Shopian", 713),
   new Array("Srinagar", 29),
   new Array("Udhampur", 27)

  ),
  new Array(
     new Array("Bokaro", 160),
   new Array("Chatra", 163),
   new Array("Deoghar", 162),
   new Array("Dhanbad", 165),
   new Array("Dumka", 167),
   new Array("Garhwa", 170),
   new Array("Giridih", 171),
   new Array("Godda", 172),
   new Array("Gumla", 174),
   new Array("Hazaribagh", 175),
   new Array("Jamtara   ", 667),
   new Array("Khunti", 668),
   new Array("Koderma", 177),
   new Array("Latehar", 669),
   new Array("Lohardaga", 179),
   new Array("Pakaur", 180),
   new Array("Palamu", 182),
   new Array("Pashchimi Singhbhum", 184),
   new Array("Purbi Singhbhum", 186),
   new Array("Ramgarh", 185),
   new Array("Ranchi", 168),
   new Array("Sahibganj", 286),
   new Array("Seraikela-Kharsawan", 303),
   new Array("Simdega", 670)

  ),
  new Array(
      new Array("Bagalkot", 190),
   new Array("Bangalore", 460),
   new Array("Bangalore Rural", 198),
   new Array("Belgaum", 201),
   new Array("Bellary", 203),
   new Array("Bidar", 204),
   new Array("Chamarajnagar", 207),
   new Array("Chickmagloor", 625),
   new Array("Chikballapur", 210),
   new Array("Chitradurga", 208),
   new Array("Dakshina Kannada", 213),
   new Array("Davanagere", 212),
   new Array("Dharwad", 349),
   new Array("Gadag", 215),
   new Array("Hassan", 218),
   new Array("Haveri", 220),
   new Array("Kalburgi", 217),
   new Array("Kodagu", 223),
   new Array("Kolar", 221),
   new Array("Koppal", 224),
   new Array("Mandya", 226),
   new Array("Mysore", 228),
   new Array("Raichur", 229),
   new Array("Ramanagar", 232),
   new Array("Shimoga ", 157),
   new Array("Tumkur", 233),
   new Array("Udupi", 234),
   new Array("Uttara Kannada", 70),
   new Array("Vijayapura", 205),
   new Array("Yadagiri", 79)


  ),
  new Array(
      new Array("Alappuzha", 326),
   new Array("Ernakulam", 327),
   new Array("Idukki", 329),
   new Array("Kannur", 328),
   new Array("Kasaragod", 330),
   new Array("Kollam", 332),
   new Array("Kottayam", 331),
   new Array("Kozhikode", 333),
   new Array("Malappuram", 334),
   new Array("Palakkad", 337),
   new Array("Pathanamthitta", 335),
   new Array("Thiruvananthapuram", 339),
   new Array("Thrissur", 341),
   new Array("Wayanad", 340)

  ),
  new Array(
    new Array("Lakshadweep", 640)
  ),
  new Array(
   new Array("Agar", 714),
   new Array("Alirajpur", 426),
   new Array("Anuppur", 427),
   new Array("Ashok Nagar", 428),
   new Array("Balaghat", 429),
   new Array("Barwani", 430),
   new Array("Betul", 431),
   new Array("Bhind", 432),
   new Array("Bhopal", 433),
   new Array("Burhanpur", 434),
   new Array("Chhatarpur", 435),
   new Array("Chhindwara", 436),
   new Array("Damoh", 437),
   new Array("Datia", 438),
   new Array("Dewas", 439),
   new Array("Dhar", 440),
   new Array("Dindori", 441),
   new Array("Guna", 442),
   new Array("Gwalior", 443),
   new Array("Harda", 444),
   new Array("Hoshangabad", 445),
   new Array("Indore", 447),
   new Array("Jabalpur", 448),
   new Array("Jhabua", 449),
   new Array("Katni", 450),
   new Array("Khandwa (East Nimar)", 451),
   new Array("Khargone (West Nimar)", 452),
   new Array("Mandla", 453),
   new Array("Mandsaur", 454),
   new Array("Morena", 455),
   new Array("Narsinghpur", 456),
   new Array("Neemuch", 458),
   new Array("Panna", 459),
   new Array("Raisen", 461),
   new Array("Rajgarh", 463),
   new Array("Ratlam", 464),
   new Array("Rewa", 465),
   new Array("Sagar", 466),
   new Array("Sanvad", 617),
   new Array("Satna", 467),
   new Array("Sehore", 468),
   new Array("Seoni", 470),
   new Array("Shahdol", 471),
   new Array("Shajapur", 472),
   new Array("Sheopur", 473),
   new Array("Shivpuri", 474),
   new Array("Sidhi", 475),
   new Array("Singrauli", 476),
   new Array("Tikamgarh", 478),
   new Array("Ujjain", 479),
   new Array("Umaria", 481),
   new Array("Vidisha", 482)


  ),
  new Array(
      new Array("Ahmednagar", 484),
   new Array("Akola", 485),
   new Array("Amrawati", 486),
   new Array("Aurangabad", 488),
   new Array("Beed", 489),
   new Array("Bhandara", 490),
   new Array("Buldhana", 491),
   new Array("Chandrapur", 492),
   new Array("Dhule", 493),
   new Array("Gadchiroli", 494),
   new Array("Gondiya", 495),
   new Array("Hingoli", 496),
   new Array("Jalgaon", 497),
   new Array("Jalna", 498),
   new Array("Kolhapur", 499),
   new Array("Latur", 500),
   new Array("Mumbai City", 501),
   new Array("Mumbai Suburban", 715),
   new Array("Nagpur", 503),
   new Array("Nanded", 504),
   new Array("Nandurbar", 505),
   new Array("Nashik", 507),
   new Array("Osmanabad", 508),
   new Array("Palghar", 716),
   new Array("Parbhani", 510),
   new Array("Pune", 512),
   new Array("Raigad", 513),
   new Array("Ratnagiri", 515),
   new Array("Sangli", 517),
   new Array("Satara", 518),
   new Array("Sindhudurg", 520),
   new Array("Solapur", 522),
   new Array("Thane", 524),
   new Array("Wardha", 526),
   new Array("Washim", 527),
   new Array("Yavatmal", 528)

  ),
  new Array(
   new Array("Bishnupur", 529),
   new Array("Chandel", 530),
   new Array("Churachandpur", 531),
   new Array("Imphal East", 532),
   new Array("Imphal West", 533),
   new Array("Senapati", 534),
   new Array("Tamenglong", 535),
   new Array("Thoubal", 536),
   new Array("Ukhrul", 537),
   new Array("Jiribam", 764),
   new Array("Kakching", 765),
   new Array("Kamjong", 766),
   new Array("Kangpokpi", 767),
   new Array("Noney", 768),
   new Array("Pherzawl", 769)
     

  ),
  new Array(
      new Array("East Garo Hills", 538),
   new Array("East Khasi Hills", 539),
   new Array("Jaintia Hills", 540),
   new Array("North Garo Hills", 742),
   new Array("Ri-Bhoi", 541),
   new Array("South Garo Hills", 542),
   new Array("South West Garo Hills", 743),
   new Array("South West Khasi Hills", 744),
   new Array("West Garo Hills", 543),
   new Array("West Jaintia Hills", 745),
   new Array("West Khasi Hills", 544)

  ),
  new Array(
     new Array("Aizawl", 545),
   new Array("Champhai", 546),
   new Array("Kolasib", 547),
   new Array("Lawngtlai", 548),
   new Array("Lunglei", 549),
   new Array("Mamit", 550),
   new Array("Saiha", 551),
   new Array("Serchhip", 552)

  ),
  new Array(
   new Array("Dimapur", 553),
   new Array("Kiphire", 719),
   new Array("Kohima", 554),
   new Array("Longleng", 720),
   new Array("Mokokchung", 555),
   new Array("Mon", 556),
   new Array("Peren", 721),
   new Array("Phek", 557),
   new Array("Tuensang", 558),
   new Array("Wokha", 559),
   new Array("Zunheboto", 560)

  ),
  new Array(
      new Array("Angul", 561),
   new Array("Baleswar (Balasore)", 562),
   new Array("Bargarh (Baragarh)", 563),
   new Array("Bhadrak", 564),
   new Array("Bolangir (Balangir)", 565),
   new Array("Boudh (Bauda)", 566),
   new Array("Cuttack", 567),
   new Array("Debagarh (Deogarh)", 568),
   new Array("Dhenkanal", 569),
   new Array("Gajapati", 570),
   new Array("Ganjam", 571),
   new Array("Jagatsinghpur", 572),
   new Array("Jajapur (Jajpur)", 573),
   new Array("Jharsuguda", 574),
   new Array("Kalahandi", 575),
   new Array("Kandhamal", 576),
   new Array("Kendrapara", 577),
   new Array("Kendujhar (Keonjhar)", 578),
   new Array("Khordha", 579),
   new Array("Koraput", 580),
   new Array("Malkangiri", 581),
   new Array("Mayurbhanj", 583),
   new Array("Nabarangpur", 584),
   new Array("Nayagarh", 585),
   new Array("Nuapada", 586),
   new Array("Puri", 588),
   new Array("Rayagada", 589),
   new Array("Sambalpur", 590),
   new Array("Subarnapur (Sonepur)", 591),
   new Array("Sundargarh (Sundergarh)", 592)

  ),

  new Array(
      new Array("Karaikal", 593),
   new Array("Mahe", 594),
   new Array("Puducherry", 1),
   new Array("Yanam", 3)

  ),
  new Array(
    new Array("Amritsar", 5),
   new Array("Barnala", 666),
   new Array("Bathinda", 7),
   new Array("Faridkot", 10),
   new Array("Fatehgarh Sahib", 12),
   new Array("Fazilka", 678),
   new Array("Firozpur", 14),
   new Array("Gurdaspur", 18),
   new Array("Hoshiarpur", 20),
   new Array("Jalandhar", 22),
   new Array("Kapurthala", 24),
   new Array("Ludhiana", 26),
   new Array("Mansa", 28),
   new Array("Moga", 30),
   new Array("Pathankot", 677),
   new Array("Patiala", 33),
   new Array("Rupnagar", 34),
   new Array("Sangrur", 35),
   new Array("Sas Nagar (Mohali)", 659),
   new Array("Shahid Bhagat Singh Nagar", 32),
   new Array("Sri Muktsar Sahib", 31),
   new Array("Taran Taran", 746)


  ),
  new Array(
      new Array("Ajmer", 36),
   new Array("Alwar", 37),
   new Array("Banswara", 38),
   new Array("Baran", 39),
   new Array("Barmer", 40),
   new Array("Bharatpur", 41),
   new Array("Bhilwara", 42),
   new Array("Bikaner", 43),
   new Array("Bundi", 44),
   new Array("Chittorgarh", 45),
   new Array("Churu", 46),
   new Array("Dausa", 47),
   new Array("Dholpur", 48),
   new Array("Dungapur", 49),
   new Array("Ganganagar", 50),
   new Array("Hanumangarh", 51),
   new Array("Jaipur", 52),
   new Array("Jaisalmer", 53),
   new Array("Jalore", 54),
   new Array("Jhalawar", 55),
   new Array("Jodhpur", 56),
   new Array("Juhnjhunun", 57),
   new Array("Karauli", 58),
   new Array("Kota", 60),
   new Array("Nagaur", 62),
   new Array("Pali", 64),
   new Array("Pratapgarh", 68),
   new Array("Rajsamand", 69),
   new Array("Sawai Madhopur", 72),
   new Array("Sikar", 74),
   new Array("Sirohi", 76),
   new Array("Tonk", 78),
   new Array("Udaipur", 83)

  ),
  new Array(
    new Array("East Sikkim", 85),
    new Array("North Sikkim", 87),
    new Array("South Sikkim", 89),
    new Array("West Sikkim", 91)
  ),
  new Array(
      new Array("Ariyalur", 95),
   new Array("Chennai", 97),
   new Array("Coimbatore", 99),
   new Array("Cuddalore", 100),
   new Array("Dharmapuri", 101),
   new Array("Dindigul", 102),
   new Array("Erode", 103),
   new Array("Kanchipuram", 104),
   new Array("Kanyakumari", 105),
   new Array("Karur", 106),
   new Array("Krishnagiri", 671),
   new Array("Madurai", 107),
   new Array("Nagapattinam", 108),
   new Array("Namakkal", 109),
   new Array("Perambalur", 110),
   new Array("Pudukkottai", 111),
   new Array("Ramanathapuram", 112),
   new Array("Salem", 113),
   new Array("Sivagangai", 114),
   new Array("Thanjavur", 115),
   new Array("The Nilgiris", 116),
   new Array("Theni", 117),
   new Array("Thiruvallur", 118),
   new Array("Thiruvarur", 119),
   new Array("Thoothukudi", 120),
   new Array("Tiruchirappalli", 121),
   new Array("Tirunelveli", 122),
   new Array("Tiruppur", 123),
   new Array("Tiruvannamalai", 124),
   new Array("Vellore", 125),
   new Array("Villupuram", 126),
   new Array("Virudhu Nagar", 657)

  ),
  new Array(
     new Array("Adilabad", 643),
   new Array("Hyderabad", 264),
   new Array("Karimnagar", 267),
   new Array("Khamman", 274),
   new Array("Mahbubnagar", 343),
   new Array("Medak", 415),
   new Array("Nalgoda", 345),
   new Array("Nizamabad", 346),
   new Array("Rangareddy", 446),
   new Array("Warangal", 477),
   new Array("Bhadradri Kothagudem", 771),
   new Array("Jagtial", 772),
   new Array("Jangaon", 773),
   new Array("Jayashankar Bhoopalpally", 774),
   new Array("Jogulamba Gadwal", 775),
   new Array("Kamareddy", 776),
   new Array("Komaram Bheem Asifabad", 777),
   new Array("Mahabubabad", 778),
   new Array("Mancherial", 779),
   new Array("Medchal", 780),
   new Array("Nagarkurnool", 781),
   new Array("Nirmal", 782),
   new Array("Peddapalli", 783),
   new Array("Rajanna Sircilla", 784),
   new Array("Sangareddy", 785),
   new Array("Siddipet", 786),
   new Array("Suryapet", 787),
   new Array("Vikarabad", 788),
   new Array("Wanaparthy", 789),
   new Array("Warangal (Rural)", 790),
   new Array("Yadadri Bhuvanagiri", 791)
   

  ),
  new Array(
   new Array("Dhalai", 127),
   new Array("Gomati", 722),
   new Array("Khowai", 723),
   new Array("North Tripura", 128),
   new Array("Sipahijala", 747),
   new Array("South Tripura", 129),
   new Array("Unokoti", 724),
   new Array("West Tripura", 130)

  ),
  new Array(
       new Array("Agra", 131),
   new Array("Aligarh", 132),
   new Array("Allahabad", 133),
   new Array("Ambedkar Nagar", 134),
   new Array("Amethi", 683),
   new Array("Amroha", 187),
   new Array("Auraiya", 135),
   new Array("Azamgarh", 136),
   new Array("Badaun", 137),
   new Array("Bagpat", 138),
   new Array("Bahraich", 140),
   new Array("Ballia", 141),
   new Array("Balrampur", 142),
   new Array("Banda", 143),
   new Array("Barabanki", 144),
   new Array("Bareilly", 145),
   new Array("Basti", 146),
   new Array("Bijnor", 147),
   new Array("Bulandshahr", 148),
   new Array("Chandauli", 149),
   new Array("Chitrakoot", 150),
   new Array("Deoria", 151),
   new Array("Etah", 152),
   new Array("Etawah", 153),
   new Array("Faizabad", 154),
   new Array("Farrukhabad", 155),
   new Array("Fatehpur", 156),
   new Array("Firozabad", 158),
   new Array("Gautam Buddha Nagar", 621),
   new Array("Ghaziabad", 161),
   new Array("Ghazipur", 164),
   new Array("Gonda", 166),
   new Array("Gorkakhpur", 169),
   new Array("Hamirpur", 173),
   new Array("Hardoi", 176),
   new Array("Hathras (Mahamaya Nagar)", 199),
   new Array("Jalaun", 178),
   new Array("Jaunpur District", 181),
   new Array("Jhansi", 183),
   new Array("Kannauj", 188),
   new Array("Kanpur Dehat", 189),
   new Array("Kanpur Nagar", 191),
   new Array("Kanshiram Nagar", 192),
   new Array("Kaushambi", 193),
   new Array("Kushinagar", 194),
   new Array("Lakhimpur Kheri", 195),
   new Array("Lalitpur", 196),
   new Array("Lucknow", 197),
   new Array("Maharajganj", 200),
   new Array("Mahoba", 202),
   new Array("Mainpuri", 206),
   new Array("Mathura", 209),
   new Array("Mau", 211),
   new Array("Meerut", 214),
   new Array("Mirzapur", 219),
   new Array("Moradabad", 222),
   new Array("Muzaffarnagar", 225),
   new Array("Panchsheel Nagar District (Hapur)", 680),
   new Array("Pilibhit", 227),
   new Array("Pratapgarh", 230),
   new Array("Rae Bareli", 235),
   new Array("Rampur", 236),
   new Array("Saharanpur", 237),
   new Array("Sambhal(Bheem Nagar)", 725),
   new Array("Sant Kabir Nagar", 238),
   new Array("Sant Ravidas Nagar", 241),
   new Array("Shahjahanpur", 242),
   new Array("Shamli", 726),
   new Array("Shravasti", 243),
   new Array("Siddharthnagar", 244),
   new Array("Sitapur", 245),
   new Array("Sonbhadra", 246),
   new Array("Sultanpur", 247),
   new Array("Unnao", 248),
   new Array("Varanasi", 249)

  ),
  new Array(
      new Array("Almora", 250),
   new Array("Bageshwar", 251),
   new Array("Chamoli", 252),
   new Array("Champawat", 254),
   new Array("Dehradun", 255),
   new Array("Haridwar", 256),
   new Array("Nainital", 257),
   new Array("Pauri Garhwal", 258),
   new Array("Pithoragharh", 259),
   new Array("Rudraprayag", 260),
   new Array("Tehri Garhwal", 261),
   new Array("Udham Singh Nagar", 262),
   new Array("Uttarkashi", 263)

  ),
  new Array(
       new Array("Alipurduar", 717),
   new Array("Bankura", 265),
   new Array("Bardhman", 268),
   new Array("Birbhum", 269),
   new Array("Cooch Behar", 270),
   new Array("Dakshin Dinajpur", 284),
   new Array("Darjeeling", 271),
   new Array("Hoogly", 275),
   new Array("Howrah", 276),
   new Array("Jalpaiguri", 277),
   new Array("Kolkata", 278),
   new Array("Malda", 279),
   new Array("Murshidabad", 280),
   new Array("Nadia", 282),
   new Array("North 24 Pargana", 253),
   new Array("Parganas (S)", 239),
   new Array("Paschim Midnapore", 281),
   new Array("Purba Medinapore", 325),
   new Array("Purulia", 285),
   new Array("South 24 Parganas", 272),
   new Array("Uttar Dinajpur", 273),
   new Array("Kalimpong", 792)

  ),
 new Array(
   new Array("Outside India", 660)

  )

);

function selectPermanentStates() {

    var selectedval = document.getElementById("<%=ctrlTextPermanentState.ClientID%>").selectedIndex - 1;

    document.getElementById("<%=hidpermenantState.ClientID%>").value = states[selectedval][1];
    document.getElementById("<%=hidpermenantState1.ClientID%>").value = selectedval;
    var distElem = document.getElementById("<%=ctrlTextPermanentDistrict.ClientID%>");


    if (selectedval >= 0) {
        var j = 0;
        clearpermanentDistricts();
        distElem.options[j] = new Option("---Please Select---", "-1"); j++;
        for (var i = 0; i < districts[selectedval].length; i++) {
            distElem.options[j] = new Option(districts[selectedval][i][0]);
            j++;
        }
    }
}
function clearpermanentDistricts() {

    for (var i = (document.getElementById("<%=ctrlTextPermanentDistrict.ClientID%>")).options.length - 1; i >= 1; i--) {
        document.getElementById("<%=ctrlTextPermanentDistrict.ClientID%>").options[i] = null;

    }
}


function loadstates() {



    var statesdd = document.getElementById("ctl00_HomePageContent_States");
    var Districtsdd = document.getElementById("ctl00_HomePageContent_Districts");
    var j = 0;
    statesdd.options[j] = new Option("---Please Select---", "-1");

    j++;


    for (i = 0; i < states.length; i++) {
        statesdd.options[j] = new Option(states[i][0]);
        if (document.getElementById("ctl00_HomePageContent_hidpresentdenState").value != "") {

            if (document.getElementById("ctl00_HomePageContent_hidpresentdenState").value == states[i][1]) {

                document.getElementById("ctl00_HomePageContent_hidpresentdenState1").value = j - 1;

            }
        }

        j++;
    }
    var previousVal = document.getElementById("ctl00_HomePageContent_hidpresentdenState1").value;

    if (previousVal != '') {
        previousVal++;

        //statesdd.value = previousVal;
        statesdd.options[previousVal].selected = true;
        selectPStates();

        var previousdistval = document.getElementById("ctl00_HomePageContent_hiddenpresentdistrict1").value;


        previousdistval++;
        //Districtsdd.value = previousdistval;


        Districtsdd.options[previousdistval].selected = true;
        document.getElementById("ctl00_HomePageContent_hiddenpresentdistrict").value = districts[previousVal - 1][previousdistval - 1][1];

    }
}

function selectPStates() {
    var selectedval = document.getElementById("ctl00_HomePageContent_States").selectedIndex - 1;

    document.getElementById("ctl00_HomePageContent_hidpresentdenState").value = states[selectedval][1];
    document.getElementById("ctl00_HomePageContent_hidpresentdenState1").value = selectedval;
    var distElem = document.getElementById("ctl00_HomePageContent_Districts");

    // alert(document.getElementById("ctl00_HomePageContent_hiddenpresentdistrict").value);
    // document.getElementById("ctl00_HomePageContent_hiddenpresentdistrict").value =
    if (selectedval >= 0) {
        var j = 0;
        clearpDistricts();
        distElem.options[j] = new Option("---Please Select---", "-1"); j++;
        for (var i = 0; i < districts[selectedval].length; i++) {
            distElem.options[j] = new Option(districts[selectedval][i][0]);
            if (document.getElementById("ctl00_HomePageContent_hiddenpresentdistrict").value != "") {
                if (document.getElementById("ctl00_HomePageContent_hiddenpresentdistrict").value == districts[selectedval][i][1]) {

                    document.getElementById("ctl00_HomePageContent_hiddenpresentdistrict1").value = j - 1;

                }
            }

            j++;
        }
    }
}



function loadstate() {


    var statesdd = document.getElementById("ctl00_HomePageContent_States");
    var Districtsdd = document.getElementById("ctl00_HomePageContent_Districts");
    var j = 0;
    statesdd.options[j] = new Option("---Please Select---", "-1");

    j++;
    //     alert("hello1");

    for (i = 0; i < states.length; i++) {
        statesdd.options[j] = new Option(states[i][0]);
        //alert(statesdd.options[j][1]);
        if (document.getElementById("ctl00_HomePageContent_hidpresentdenState").value != "") {

            if (document.getElementById("ctl00_HomePageContent_hidpresentdenState").value == states[i][1]) {

                document.getElementById("ctl00_HomePageContent_hidpresentdenState1").value = j - 1;

            }
        }

        j++;
    }
    var previousVal = document.getElementById("ctl00_HomePageContent_hidpresentdenState1").value;

    if (previousVal != '') {
        previousVal++;

        //statesdd.value = previousVal;
        statesdd.options[previousVal].selected = true;
        selectStates();
        var previousdistval = document.getElementById("ctl00_HomePageContent_hiddenpresentdistrict1").value;


        previousdistval++;
        //Districtsdd.value = previousdistval;
        Districtsdd.options[previousdistval].selected = true;
    }
}

function selectStates() {

    var selectedval = document.getElementById("ctl00_HomePageContent_States").selectedIndex - 1;

    document.getElementById("ctl00_HomePageContent_hidpresentdenState").value = states[selectedval][1];
    document.getElementById("ctl00_HomePageContent_hidpresentdenState1").value = selectedval;
    var distElem = document.getElementById("ctl00_HomePageContent_Districts");


    if (selectedval >= 0) {
        var j = 0;
        clearpDistricts();
        distElem.options[j] = new Option("---Please Select---", "-1"); j++;
        for (var i = 0; i < districts[selectedval].length; i++) {
            distElem.options[j] = new Option(districts[selectedval][i][0]);
            //alert(document.getElementById("ctl00_HomePageContent_hiddenpresentdistrict").value + "vIk");
            if (document.getElementById("ctl00_HomePageContent_hiddenpresentdistrict1").value != "") {
                if (document.getElementById("ctl00_HomePageContent_hiddenpresentdistrict1").value == districts[selectedval][i][1]) {

                    document.getElementById("ctl00_HomePageContent_hiddenpresentdistrict1").value = j - 1;

                }
            }
            j++;
        }
    }
}
function selectpDistrict() {
    var distselectedindx = document.getElementById("ctl00_HomePageContent_Districts").selectedIndex - 1;

    var stateselectedindx = document.getElementById("ctl00_HomePageContent_States").selectedIndex - 1;
    document.getElementById("ctl00_HomePageContent_hiddenpresentdistrict").value = districts[stateselectedindx][distselectedindx][1];
    //    alert(document.getElementById("ctl00_HomePageContent_hiddenpresentdistrict").value);
    //   alert(document.getElementById("ctl00_HomePageContent_hidpresentdenState").value);
    //alert(distselectedindx);
    document.getElementById("ctl00_HomePageContent_hiddenpresentdistrict1").value = distselectedindx;


}

function clearpDistricts() {

    for (var i = (document.getElementById("ctl00_HomePageContent_Districts")).options.length - 1; i >= 1; i--) {
        document.getElementById("ctl00_HomePageContent_Districts").options[i] = null;

    }
}



function fnLaunch(name) {

    //    var aForm;
    //    aForm = oForm.elements;
    //    var myObject = new Object();
    //    for (var a = 0; a < aForm.length; a++)
    //        alert(a);
    //myObject.firstName = aForm.oFirstName.value;
    //myObject.lastName = aForm.oLastName.value; sample
    // The object "myObject" is sent to the modal window.
    //,'','dialogWidth:1000px; dialogHeight:800px; center:yes'
    //window.showModalDialog(name, myObject, "dialogHeight:300px; dialogLeft:200px;");
}
