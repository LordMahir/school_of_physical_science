-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2022 at 10:59 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sps`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `announcementTitle` varchar(100) NOT NULL,
  `announcementLink` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcements`
--

-- INSERT INTO `announcements` (`announcementTitle`, `announcementLink`) VALUES
-- ('New Announcement Here', 'https://students.iitmandi.ac.in/main/'),
-- ('New Announcement Here', 'https://students.iitmandi.ac.in/main/'),
-- ('', NULL),
-- ('Announcement with no link ', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `newsTitle` varchar(500) NOT NULL,
  `newsImage` varchar(100) DEFAULT NULL,
  `newsLink` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`newsTitle`, `newsImage`, `newsLink`) VALUES
('Abhishek Sharma has been selected for PMRF, 2022.', '1.jpg', ''),
('Rajeev Ray has successfully defended his doctoral dissertation.', '2.jpg', ''),
('Dr. Soni is a Senior Member The Institute of Electrical and Electronics Engineers (SM-IEEE).', '3.jpg', ''),
('A. Mushtaq et al. has published "Femtosecond induced third-order optical nonlinearity in quasi 2D Ruddlesden-Popper perovskite film deciphered using Z-scan”"', 'news.jpg', 'https://pure.mpg.de/rest/items/item_3418245/component/file_3482263/content'),
('M Bharath et al. has published "Evidence of Lattice Strain as a Precursor to Superconductivity in BaPb0.75Bi0.25O3” "', 'news.jpg', 'https://iopscience.iop.org/article/10.1088/1361-648X/acabf4'),
('Dr. Soni received the research excellence award 2021 on 12th foundation day of the IIT mandi.', '6.jpg', ''),
('P Sharma et al. has published "Synthesis and structural link to the electronic and magneto-transport properties of spin-orbit Mott insulator Sr2IrO4"', 'news.jpg', 'https://iopscience.iop.org/article/10.1088/1361-648X/ac8961/meta'),
('Ms. Sheetal got GNeus-Marie Curie fellowship for her postdoctoral work at Julich Centre for Neutron Science, Germany', '8.jpg', ''),
('Dr. Soni is an Associate Editor for Journal Materials Lab.', '9.jpg', 'http://matlab.labapress.com/matlab/editorial_board'),
('Swati Pathak has won Best poster award at CMDAYS 2022 NIT Nagaland ', '10.jpg', ''),
('P Sharma et al. has published “Strain induced phase transition in La 0.2 Sr0.8MnO3” in Applied Physics A (2022)  ', 'news.jpg', 'https://ui.adsabs.harvard.edu/abs/2022ApPhA.128..271S/abstract'),
('Ms. Shailja Sharma joined IFW Dresden, Germany in August 2022, for the postdoctoral position.', '12.jpg', ''),
('Mr. Antik Sihi has obtained a postdoctoral position in Trinity College, Dublin, Ireland. ', '13.jpg', ''),
('Mr. Kushagra Srivastav, BTech Engineering Physics has been offered  Mitacs Globalink-research-internship to work at the University of Toronto, Canada.', '14.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eventId` INT AUTO_INCREMENT PRIMARY KEY,
  `eventTitle` varchar(100) NOT NULL,
  `eventAbstract` varchar(100) NOT NULL,
  `eventLink` varchar(100) DEFAULT NULL,
  `eventSpeaker` varchar(100) DEFAULT NULL,
  `eventVenue` varchar(100) DEFAULT NULL,
  `eventDateTime` varchar(100) NOT NULL,
  `eventType` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eventTitle`,`eventAbstract`, `eventLink`, `eventSpeaker`, `eventVenue`, `eventDateTime`,`eventType`) VALUES
('Testing Google Link','Testing 1','https://www.google.com','test-speaker', 'test-venue', '2023-01-17 6:00:00','past'),
('New Title','Testing 2',NULL, NULL, NULL, CURRENT_TIMESTAMP,'past'),
('New Title 2','Testing 3',NULL, NULL, NULL, '2023-02-17 6:00:00','past');
COMMIT;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `phd` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `personalWebsite` varchar(200) DEFAULT NULL,
  `researchAreas` varchar(1000) DEFAULT NULL,
  `researchText` varchar(200) DEFAULT NULL,
  `researchImage` varchar(100) DEFAULT NULL,
  `researchImageTitle` varchar(100) DEFAULT NULL,
  `researchImageText` varchar(100) DEFAULT NULL,
  `recentPublications` varchar(3000) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (
  `name`, 
  `phd`, 
  `designation`,
  `email`,
  `phone`,
  `image`,
  `personalWebsite`,
  `researchAreas`,
  `recentPublications`,
  `researchText`) VALUES
('Suman Kalyan Pal','Indian Association for the Cultivation of Science','Chairperson & Professor','suman@iitmandi.ac.in','01905-267040','faculty/Suman.jpeg','http://faculty.iitmandi.ac.in/~suman/USOLab/','Physics of two-dimensional (2D) transition metal mono-/di-chalcogenides (TMCs)|Exciton dynamics in 2D materials and quantum dots (QDs) and multiple exciton generation|Metal Halide Perovskite: Material Properties to Device Applications|Organic Photovoltaics: materials and devices','Soni, A; Pal, S. K. Valley degree of freedom in two-dimensional van der Waals materials J. Phys. D: Appl. Phys. 2022, 55, 303003. |Mushtaq, A.; Pradhan, B; Kushavah, D.; Zhang, Y; Wolf, M.; Schrenker, N.; Fron, E.; Bals, S.; Hofkens, J.; Pal, S. K. Third-Order Nonlinear Optical Properties and Saturation of Two-Photon Absorption in Lead-Free Double Perovskite Nanocrystals under Femtosecond Excitation ACS Photonics, 2021, 8, 3365. |Ray, R.; Pal, S. K. Solution-Processed Photoinduced Multilevel Resistive Switching Devices Based on Lead-Free All-Inorganic Perovskite IEEE Electron Device Lett., 2021, 42, 1284.|Soni, A; Kushavah, D; Lu, L; Chang, W. H.; Pal, S. K. Ultrafast Exciton Trapping and Exciton−Exciton Annihilation in Large-Area CVD-Grown Monolayer WS2 J. Phys. Chem. C 2021, 125, 23880. |Sarkar, A. S.; Mushtaq, A.; Kushavah, D; Pal, S. K.  Liquid exfoliation of electronic grade ultrathin tin(II) sulfide (SnS) with intriguing optical response NPJ 2D Mater. Appl. 2020,4,1.','Experimental Atomic, Molecular and Optical Physics'),
('Ajay Soni','UGC-DAE Consortium for Scientific Research, Indore, MP','Associate Professor','ajay@iitmandi.ac.in','01905-267854','faculty/AjaySoni.jpg','http://faculty.iitmandi.ac.in/~ajay/ ','Experimental Condensed Matter Physics| Nanomaterials for Future Energy| Mesoscopic Physics and Nano-functional Devices| Thermoelectric and Optoelectronic Materials','Electron-Phonon Coupling and Quantum Correction to Topological Magnetoconductivity in Bi2GeTe4,Niraj Singh, Divya Rawat, Dibyendu Dey, Anna Elsukova, Per O. A. Persson, Per Eklund, A. Taraphder and Ajay Soni.  | Glassy Thermal Conductivity in Cs3Bi2I6Cl3 Single Crystal, Paribesh Acharyya, Tanmoy Ghosh, Koushik Pal, Kewal Singh Rana, Moinak Dutta, Diptikanta Swain, Martin Etter, Ajay Soni, Umesh V. Waghmare, and Kanishka Biswas.Nature Communications (2022)  | Enhanced atomic ordering leads to high thermoelectric performance in AgSbTe2, Subhajit Roychowdhury, Tanmoy Ghosh, Raagya Arora, Manisha Samanta, Lin Xie, Niraj Kumar Singh, Ajay Soni, Jiaqing He, U.V. Waghmare and K. Biswas, Science 371, 722-727(2021) |Ultralow Thermal Conductivity and Thermoelectric Properties of Bi4GeTe7 with an Intrinsic van der Waal Heterostructure, Niraj Singh, Ankit Kashyap and Ajay Soni, Applied Physics Letters, 119, 223903 (2021), |Local Ferroelectric Polarization in Antiferroelectric Chalcogenide Perovskite BaZrS3 Thin Film, Juhi Pandey, Debjit Ghoshal, Dibyendu Dey, Tushar Gupta, A. Taraphder, Nikhil Koratkar and Ajay Soni, Phys Rev B 102, 205308(2020),','Experimental Condensed Matter Physics.'),
('Bindu Radhamany','UGC-DAE Consortium for Scientific Research, Indore, M.P.','Associate Professor','bindu@iitmandi.ac.in','01905-267060','faculty/Bindu.jpg','','My broad area of interest is experimental condensed matter physics. My research interest lies in understanding the evolution of electronic structure and associated local and global structural changes in various complex transition metal oxides across various electronic and magnetic phase transitions. The techniques that I use are x-ray diffraction, x-ray absorption spectroscopy (XAS), photoelectron spectroscopy, magnetotransport measurements etc. I also use computational tools to understand the observed spectra. I am currently working on materials that show quantum phase transition, superconductivity, phase separation, disorder effects, spintronic effects etc.','Synthesis and structural link to the electronic and magneto-transport properties of spin–orbit Mott insulator Sr2IrO4; Priyamedha Sharma, Saurabh Singh, Kentaro Kuga, Tsunehiro Takeuchi and R Bindu;J.Phys: Condens. Matter 34 435402 (2022). |Strain induced phase transition in La 0.2 Sr0.8MnO3;Priyamedha Sharma, Swati Pathak, Himanshu Pant, and R. Bindu; Applied Physics A 128, 271 (2022). |Structural and electronic effects in GdCu alloy; Priyamedha Sharma; Jaskirat Brar, Bharath M, Bindu R; J. Phys: Condens.Matter 32 305603 (2020) |Interplay of lattice distortion and electronic structure in BaBiO3; Bharath M, Priyamedha Sharma, Jaskirat Brar, R.K. Maurya, and R. Bindu; J. Phys.: Condens. Matter 32, 055504 (2020) |Evidence of nanoscale structural phase separation in large bandwidth La0.2Sr0.8MnO3; R. Bindu, Sanjay Singh, Navneet Singh, Rajeev Ranjan, Kalobaran Maiti, A. H. Hill, and S. R. Barman; Phys. Rev. B 86, 140104(R) (2012)','Experimental Condensed Matter Physics'),
('C.S. Yadav','Jawaharlal Nehru University, New Delhi','Associate Professor','shekhar@iitmandi.ac.in','01905-267258','faculty/Shekhar.jpg','https://iitmandi.ac.in/CMP/files/CSY%20webpage/CSY_homepage.php','Experimental Condensed Matter Physics| Strongly Correlated Electron Systems| Superconductivity| Topological phases of matter| Thermoelectricity| Quantum Magnetism| Multiferroics','S. Chhillar, K. Mukherjee, and C.S. Yadav Large magnetodielectric coupling in the vicinity of  metamagnetic transition in 6H-perovskite Ba3GdRu2O9, Journal of Physics: Condensed Matter 34, 145801 (2022) | Shailja Sharma, Shiv Kumar, G.C. Tewari, G. Sharma, E.K. Schwier, Kenya Shimada, A. Taraphder,  and C.S. Yadav Magnetotransport and high resolution angle –resolved photoemission spectroscopy studies of palladium doped Bi2Te3, Physical Review B 105, 115120 (2022) | Sonika, M.K. Hooda, Shailja Sharma, and C.S.Yadav Planar Hall effect in Cu intercalated PdTe2, Applied Physics Letter  119, 261904 (2021) | Sheetal, and C.S. Yadav Evolution of spin freezing transition and structural, magnetic phase diagram of Dy2-xLaxZr2O7; x = 0- 2.0, Scientific Reports 11, 19832 (2021) | Shailja Sharma, and C.S. Yadav Experimental setup for Seebeck and Nernst coefficient measurements Review of Scientific Instruments 91, 123907 (2020)','Experimental Condensed Matter Physics'),
('Hari Varma','IIT Madras','Associate Professor','hari@iitmandi.ac.in','01905-267064','faculty/Hari.jpg','http://faculty.iitmandi.ac.in/~hari/','Theoretical/computational studies on Structure and dynamics of  atomic systems| ionization and scattering studies of atoms| clusters and endohedral systems| Wigner time-delay studies in the atto-second regime','Near-threshold Cooper minimum in the photoionisation of the 2p subshell of sodium atom and its impact on the angular distribution parameter, Nishita hosea, Jobin Jose and Hari R. Varma, J.  Phys. B: At.  Mol. Opt. Phys. 55, 135001(2022) | Confinement enhanced spin-orbit interchannel coupling effect on the atomic photoionization, Afsal Thuppilakkadan, Jobin Jose and Hari R. Varma, J.  Phys. B: At.  Mol. Opt. Phys. 54 145001(2021) | Collective effects in photoionization of sodium clusters: plasmon resonance spill, induced attractive force and correlation minimum, Rasheed Shaik, Hari R Varma and Himadri S Chakraborty, J.  Phys. B: At.  Mol. Opt. Phys. 54, 125101(2021) | Electronic structure and dynamics of confined atoms, P. C. Deshmukh, J. Jose, H. R. Varma, and S. T. Manson,  The European Physical Journal D, 75: Article No.166, 2021 | A systematic study of Coulomb Confinement Resonances of atoms trapped inside charged fullerene        (A@C q 60), Afsal Thuppilakkadan, Jobin Jose and Hari R Varma, Phys. Rev. A, 102, 062826 (2020)','Theoretical Atomic, Molecular and Optical Physics'),
('Kaustav Mukherjee','UGC-DAE Consortium for Scientific Research, Indore, India','Assistant Professor','kaustav@iitmandi.ac.in','01905-267043','faculty/Kaustav.jpg','http://faculty.iitmandi.ac.in/~kaustav/','Strongly Correlated Electron Systems| Quantum Magnetism| Low Dimensional and Frustrated Magnetism| Oxides and Intermetallics| Heusler Alloys| Multiferroics ','Unravelling the signatures of effective spin ½ moments in CeVO4: Magnetization and Heat Capacity study Dheeraj Ranaut and K. Mukherjee J. Phys. Condens. Matter 34, 315802 (2022) | Optical phonon modes assisted thermal conductivity in p-type ZrIrSb Half-Heusler alloy: A combined experimental and computational study Kavita Yadav, S. Singh, T. Takeuchi, and K. Mukherjee J. Phys. D: Appl. Phys. 54, 495303 (2021) | Coexistance of non-Fermi liquid behavior and bi-quadratic exchange coupling in La-substituted CeGe: Non-linear susceptibility and DFT + DMFT study Karan Singh, A. Sihi, S. K. Pandey and K. Mukherjee Phys. Rev. B 102, 235137 (2020) | Effect of (Cu/Fe)O5 bipyramid size and separation on magnetic and dielectric properties of rare earth layered perovskite LaBaCuFeO5 and LuBaCuFeO5 Surender Lal, C. S. Yadav and K. Mukherjee J. Appl. Phys. 126, 144101 (2019) | Complex magnetic behavior and evidence of superspin glass state in a binary intermetallic compound Er5Pd2 Mohit K. Sharma, Kavita Yadav and K. Mukherjee J. Phys.: Condens. Matter 30, 215803 (2018) ','Experimental Condensed Matter Physics'),
('Pradeep Kumar','IISc Bangalore','Associate Professor','pkumar@iitmandi.ac.in','01905-267137','faculty/PradeepKumar.jpg','http://faculty.iitmandi.ac.in/~pkumar/','Quantum and 2D Materials -: The competition between various microscopic degrees of freedom in Quantum materials provides fertile ground to observe exotic ground states such as the Quantum Spin Liquid (QSL), a state which precludes long range ordering of spins even at absolute zero. Systems with QSL as their ground state are anticipated to be topologically active and to host exotic low energy fractionalized quasi-particle excitations. Our central focus is to probe and manipulate the quasi-particle excitations in quantum materials using Raman as a function of simultaneous different perturbations such as low temperature, strain and electric field. This also has the potential to open up doors to manipulate quantum degrees of freedom, i.e. electron spin and photon polarization, which are at the heart of quantum computation and communication. In 2D nanosystems, our focus is twofold first to explore and generate fundamental understanding about the exciting and challenging physics of 2D systems using in-situ Raman spectroscopy as a function of simultaneous different perturbations, such as gating coupled with strain down to liquid He temperature. Secondly, material engineering, through tuning their different physical, electronic and thermal properties as a function of controlled tuning parameters such as strain. ','Electron-Phonon Coupling, Thermal Expansion Coefficient, Resonance Effect and Phonon Dynamics in High Quality CVD Grown Mono and Bilayer MoSe2, Phys. Rev. B 105, 085419 (2022). | Fractional Spin fluctuations and quantum liquid signature in Gd2ZnIrO6, Phys. Rev. B 104, 134402 (2021). | Anisotropic Electron-Photon-Phonon Coupling in Layered MoS2, J. Phys.: Condens. Matter 32, 415702  (2020). | Kitaev Magnetism and Fractionalized Excitations in Double Perovskite Sm2ZnIrO6, Phys. Rev. Research 2, 013040 (2020). | Kramer doublets, phonons, crystal-field excitations and their coupling in Nd2ZnIrO6, Phys. Rev. Research 2, 023162 (2020).','Experimental Condensed Matter Physics'),
('Pradyumana K Pathak','Physical Research Laboratory, Ahmedabad','Associate Professor','ppathak@iitmandi.ac.in','01905-237981','faculty/pathak.jpg','','Quantum Optics | Quantum Information | Nanophotonics | Mesoscopic Physics','Generation of time-bin entangled photon pairs using a quantum-dot cavity system, P. K. Pathak and S. Hughes, submitted, arXiv:1010.1713. | Coherently triggered single photons from a quantum-dot cavity system, P. K. Pathak and S. Hughes, Phys. Rev. B 82, 045308 (2010). | Nonlinear photoluminescence spectra from a quantum-dot cavity system: Interplay of pump-induced stimulated emission and anharmonic cavity QED, P. Yao, P. K. Pathak, E. Illes, S. Hughes, S. Munch, S. Reitzenstein, P. Franeck, A. Loffler, T. Heindel, S. Hofling, L. Worschech, and A. Forchel, Phys. Rev. B 81, 033309 (2010). | Cavity-QED assisted attraction between a cavity mode and an exciton mode in a planar photonic-crystal cavity, T. Tawara, H. Kamada, T. Tanabe, T. Sogawa, H. Okamoto, P. Yao, P. K. Pathak, and S. Hughes, Opt. Express 18, 2719 (2010). | High sensitivity charge detection and dephasing in edge state interferometer, P. K. Pathak, Youngnae Lee, and Kicheon Kang, Physica E 42, 1103 (2010).','Theoretical Quantum Optics'),
('Prasanth P. Jose','IISc Bangalore','Associate Professor','prasanth@iitmandi.ac.in','01905-267266','faculty/ppj.jpg','https://sites.google.com/site/prasanthpj/','Dynamics of systems near phase transitions. Glass transition in low density model systems. Study of ergodicity and its relation to chaos in small systems. Computational modeling of materials. Simulations of biopolymers. Phase transitions in liquid crystals Properties of polymer melts and solutions. Dynamics of complex systems. Non-equilibrium dynamics.','Violation of Stokes–Einstein and Stokes–Einstein–Debye relations in polymers at the gas-supercooled liquid coexistence, Jalim Singh and Prasanth P Jose, J. Phys.: Condens. Matter, 33 055401(2021) | Relation between density relaxation and density of the first coordination shell in a supercooled linear polymer melt, Jalim Singh, D. C. Thakur, and Prasanth P. Jose, AIP Conference Proceedings 2265, 030220 (2020) | Similarities between protein folding and granular jamming, Prasanth P. Jose, and Ioan Andricioaei, Nature Communications, 3, 1161(2012). | Single-chain dynamics in a semidilute polymer solution under steady shear, Prasanth P. Jose, and Grzegorz Szamel, J. Chem. Phys. 128, 224910 (2008). | Complete breakdown of the Debye model of rotational relaxation near the isotropic-nematic phase boundary: Effects of intermolecular correlations in orientational dynamics, Prasanth P. Jose, Dwaipayan Chakrabarti, and Biman Bagchi, Phys. Rev. E, 73, 31705 (2006).','Theoretical Soft Matter Physics'),
('Arko Roy','Physical Research Laboratory','Assistant Professor','arko@iitmandi.ac.in','01905-267722','faculty/ArkoRoy.jpeg','https://faculty.iitmandi.ac.in/~arko/','Our research interests are on theoretical matters related to cold atoms. These span a wide range of very exciting and challenging research areas. Be it the components of a quantum computer, or the physics of fluids, or as simulators of condensed matter systems, it is of immense value to know the collective behaviour of atoms to a fine detail. The characterization of fluctuations in such systems could be far reaching and of fundamental importance.','Collective excitations in cigar-shaped spin-orbit coupled spin-1 Bose-Einstein condensates,Phys. Rev. A 106, 013304 (2022);  | FORTRESS: FORTRAN programs to solve coupled Gross-Pitaevskii equations for spin-orbit coupled spin-f Bose-Einstein condensate with spin f = 1 or 2, Comput. Phys. Commun. 279, 108442 (2022);  | Quantum-torque-induced breaking of magnetic interfaces in ultracold gases, Nat. Phys. 17, 1359 (2021);  | Finite temperature spin dynamics of a two-dimensional Bose-Bose atomic mixture, Phys. Rev. Research 3, 013161 (2021);  | Non-linear dynamical response of interacting bosons to synthetic electric field, Phys. Rev. Research 2, 043133 (2020); ','Theoretical Atomic, Molecular and Optical Physics'),
('G. Sharma','Clemson University, USA','Assistant Professor','girish@iitmandi.ac.in','01905-267855','faculty/GSharma.jpg','https://sites.google.com/view/girishsharmaiitmandi','Material advances now allow us to explore rare and exotic quantum phenomena in a solid-state laboratory. Some prominent examples include (i) engineering fractionally charged particles that obey non-Abelian statistics, which have no existing counterpart in high-energy physics, (ii) manipulating Carbon in a way that can be electronically tuned to become superconducting, insulating, or metallic, (iii) synthesizing materials that show robust conductance unaffected by disorder in the sample. Material advancement is (and must be) accompanied by advances in our fundamental and theoretical knowledge of these materials down to the quantum level. Since we live in the century that will witness the rise of quantum computers, the quest for advancing our knowledge about quantum effects in materials is a highly fruitful endeavor, both fundamentally and technologically. My research intends to widen our theoretical understanding of how the electrons flow around collectively in quantum materials. Specifically, I develop and implement quantum transport methodologies to explore the emergent and complex quantum dynamics in modern condensed matter physics.','"Carrier transport theory for twisted bilayer graphene in the metallic regime" G. Sharma, Indra Yudhistira, Nilotpal Chakraborty, Derek. Y. H. Ho, Michael S. Fuhrer, Giovanni Vignale, Shaffique Adam. Nature Communications 12, 1 (2021) | "Longitudinal magnetoconductance and the planar Hall effect in a lattice model of tilted Weyl fermions" A. Ahmad, G. Sharma. Physical Review B 103, 115146 (2021). | "Anomalous Hall and Nernst effects in Kane fermions". Karun Gadge, S. Tewari, G. Sharma, Physical Review B, 105, 235420 (2022). | "The sign of longitudinal magnetoconductivity and the planar Hall effect in Weyl semimetals" G. Sharma, S. Nandy, Sumanta Tewari. Physical Review B 102, 205107 (2020). | “Chiral anomaly and quasi-classical planar Hall effect in Weyl semimetals” S. Nandy, G. Sharma, A. Taraphder, Sumanta Tewari. Physical Review Letters 119, 176804 (2017).','Theoretical Condensed Matter Physics'),
('Harsh Soni','IISc Bengaluru','Assistant Professor','harsh@iitmandi.ac.in','01905-267727','faculty/HarshPassportSizePhoto.png','https://faculty.iitmandi.ac.in/~harsh/','Active Granular Systems | Biophysics | Physics of microswimmers','Active nonreciprocal attraction between motile particles in an elastic medium, Rahul Kumar Gupta, Raushan Kant, Harsh Soni, Sriram Ramaswamy and A.K. Sood, Phys. Rev. E 105 6, 064602(2022) | Enhanced microorganism swimming in active matter, Harsh Soni, Robert A. Pelcovits, and Thomas R. Powers, Phys. Rev. Lett. 121, 178002(2018). | Wrinkling of a thin film on a nematic liquid crystal elastomer, Harsh Soni, Robert A. Pelcovits, and Thomas R. Powers, Phys. Rev. E 94, 012701(2016). | Flocking at a distance in active granular matter, Nitin Kumar, Harsh Soni, Sriram Ramaswamy and A.K. Sood, Nature Communications 5, 4688(2014).','Theoretical Soft Matter Physics'),
('Nirmalya Kajuri','IMSc, Chennai','Assistant Professor','nirmalya@iitmandi.ac.in','01905-267727','faculty/Nirmalya.jpg','https://sites.google.com/view/nirmalya-kajuri/','Broadly, I am interested in the interplay between quantum theory and gravity. My research interests are in the fields of AdS/CFT correspondence and quantum cosmology. In AdS/CFT correspondence, I work on translating questions about gravitational physics (in an AdS space-time) to questions about conformal field theory (CFT). In quantum cosmology, I am interested in understanding decoherence.','Bulk Reconstruction and Bogoliubov Coefficients in AdS_2, Parijat Dey and Nirmalya Kajuri, JHEP 09  (2021) | Symmetry transformation of subregion bulk representation, Nirmalya Kajuri, Phys.Lett.B 825 (2022) | Bulk reconstruction in rotating BTZ black hole, Nirmalya Kajuri, Phys.Rev.D 103 (2021) | Lectures on bulk reconstruction, Nirmalya Kajuri, SciPost Phys.Lect.Notes 22 (2021) | Entanglement entropy of nonlocal theories in AdS spacetimes, Gaurav Narain and Nirmalya Kajuri,Phys.Rev.D 99 (2019)','Theoretical High Energy Physics'),
('Arti Kashyap','IIT Roorkee','Associate Professor','arti@iitmandi.ac.in','01905-267042','faculty/ArtiKashyap_1.jpeg','https://faculty.iitmandi.ac.in/~arti','Computational Condensed Matter Physics | Electronic structure | Density Functional Theory | Computational Nanomagnetism | Material Informatics | Big data Technologies','Pivotal Role of Intersite Hubbard Interactions in Fe-Doped α‐MnO2. Ruchika Mahajan, Arti Kashyap, Iurii TimrovJ. Phys. Chem. C  126, 14353, 2022. | Importance of intersite Hubbard interactions in β-MnO2: A first-principles DFT+U+V study : Ruchika Mahajan, Iurii Timrov, Nicola Marzari, and Arti Kashyap Phy. Rev.  Materials 5, 104402 (2021). | Heterostructures of ε-Fe 2 O 3 and α-Fe 2 O 3: insights from density functional theory, I Ahamed, N Seriani, R Gebauer, and A Kashyap RSC Advances ,vol. 10,.46 pp. 27474-27480, 2020. | Born effective charges and electric polarization in bulk ε-Fe2O3: An ab-initio approach,I Ahamed, R Skomski, and A Kashyap Chemical Physics , p.110789, 2020. | Theory of Mn-Based High-Magnetization Alloys A Kashyap, R Pathak, DJ Sellmyer, R Skomski IEEE Transactions on Magnetics, vol.54 (11), pp 1-6, 2018.','Computational Condensed Matter Physics');

CREATE TABLE `research` (
  `page` varchar(100) NOT NULL,
  `title` varchar(300) NOT NULL,
  `content` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `research` (`page`, `title`, `content`) VALUES
('amo', 'Fluctuations in quantum gases (Arko Roy)', 
'Cooled to nano-Kelvin temperatures, Bose-Einstein condensates acquire macroscopic quantum properties. Observable in experiments, quantum gases give direct access to quantum physics. Be it the components of novel quantum technologies, or as simulators of condensed matter systems, it is of immense value to know 
the role by quantum and thermal fluctuations to a fine detail.
We explore the equilibrium and out-of-equilibrium properties of 
spinor Bose-Einstein condensates at finite temperatures.'),
('amo', 'Cold Atom Physics and Quantum Thermodynamics (Arko Roy)',
'There have been a lot of interest in the miniaturization of the thermodynamic heat engines and pumps to the quantum mechanical systems and understand the applicability and modification in the laws of classical thermodynamics to these quantum thermodynamic systems. The optimal implementation and investigation of such devices with ultracold neutral atoms in quantum-gas microscopes offers a fruitful platform for the experiments. The development of theoretical design and their
experimentally realistic model using Bose-Einstein condensates of dilute atomic gases are of great importance in development of new quantum technologies. Apart from advancing the emerging field of quantum thermodynamics, we aim to illustrate possibilities in discovering useful quantum machines to cool ultracold quantum gases beyond the well-known techniques of evaporative and laser cooling.
'),
('amo', 'Exciton dynamics in quantum dots (QDs) and multiple exciton generation (Suman Kalyan Pal)', 
'In QDs the energy of an absorbed photon can via multiple exciton generation (MEG) be broken down into many electron-hole pairs thereby increasing the photocurrent. Alternatively, hot electron transfer can use the extra energy providing higher photovoltage. Both of these processes are capable of improving the solar cell efficiency beyond the Shockley-Queisser limit. In order to make use of the effects, the processes have to be followed by efficient charge stabilization with minimal back recombination. It is also vital to efficiently fill the holes left in QDs after electron injection. The purpose of the current project is to carry out a thorough study of the dynamic processes in the material to optimize the key components of QD solar cells (QDSC).'),
('cmp', 'Multi-body interactions in optical properties of layered materials at extreme nanoscale (Ajay Soni)',
'Our group have explored the ultrathin two-dimensional materials for less understood phenomena such as excitonic complexes and excitonic excited states, [Appl. Surf. Sci.(2019) 463, 52] many-body phenomena involving coupling of electron and phonon in charge density wave (CDW), [Phys Rev Res (2020) 2, 033118] local ferroelectric state in antiferroelectric semiconductors, [ Phys. Rev B (2020) 102 (20), 205308 and Adv. Func. Mater. (2020) 30, 2001387] and plasmon-phonon coupling leading to poor thermal conductivity in superionic thermoelectric material [ACS Appl. Ener. Mater. (2020) 3 (3), 2175]. We have emphasized and proposed energy band diagram with the unique observation of Rydberg states of A exciton and biexciton in PL spectra of monolayer MoS2, at 4 K. The understanding of such excitonic states and biexcitons is useful for future quantum information processing, optoelectronic, photonics and THz applications. [Appl. Surf. Sci.(2019) 463, 52] Plasmon-phonon coupling is another form of many-body interaction leading to poor thermal conductivity and thus improved thermoelectric performance of various thermoelectric materials. Such unique phenomena and fundamental understanding have important implications for the development of advanced technologies.'),
('cmp', 'Fundamental understanding of crystalline layered chalcogenides for quantum phenomena and thermoelectricity (Ajay Soni)',
'The correlation between electron-phonon coupling and topological quantum properties have got a very high attention by the scientific community across the globe. Majority of the materials studied for topological insulating behavior are also good thermoelectric materials, because of layered nature and nano band-gap. The champion Bi2Te3 is one of the example of such materials and in the similar series Bi2GeTe4, and Bi4GeTe7, also have topological insulating properties arising due to the spin-orbit interactions of Bi and Te, which influences the magneto-transport properties. We have addressed the dynamics of stretching of the Bi-Te bonds to understand the bridging phonons in the field of topological materials. We have united the two important aspects of a known strong topological insulator, Bi2GeTe4, with magneto transport and Raman spectroscopy studies. [PRB (2022) 105, 045134]'),
('cmp', 'Anharmonicity in crystalline materials and thermoelectricity (Ajay Soni)',
'Associated with higher order of anharmonicity, the thermoelectric materials with large Grneisen parameter possesses ultralow thermal conductivity, which plays a decisive role in engineering of phonons. From the lower average phonon velocity, Gruneisen parameter and bond lengths, we suggested that the Bi2GeTe4, with ultralow thermal conductivity, has a great potential for thermoelectricity. [APL (2020) 117, 123901] In addition to this, we also have designed and prepared a complex Bi4GeTe7, which has the alternating quintuplet-septuplet atomic stacking separated by van der Waal gaps. The structural complexity, in natural heterostructures and mass-contrast by heavy elements, generates a sufficient amount of anharmonicity for poor phonon propagation resulting in poor thermal conductivity. [APL, (2021) 119, 223903] The unique concepts of crystalline anharmonicity for glassy thermal transport with appearance of soft phonon and impurity localized modes, [APL (2016), 109, 133904] electronic band convergence with doping and coupling of charge carriers with Magnetic Entropy [APL (2018), 113, 193904 and JMCC (2018) 6, 6489] for enhancement in thermoelectric performance of environment friendly crystalline SnTe. We showed that the thermoelectric power of SnTe can be increased not only by changing the charge carriers but also with modifying the effective thermal mass of charge carriers by band convergence and coupling of magnetic entropy. [JMCC (2018) 6, 6489] The new soft modes, observed in Raman spectra, have also been shown in other crystalline materials for the work done in collaborations. [Ener. Env. Sci. (2019) 12, 589; JACS (2019) 141, 51, 20293 and JACS (2019) 142 (36), 15595 (2020)]. We have demonstrated that the cubic phase of superionic Argyrodites (Ag8GeSn6) has an efficient thermoelectric property over the orthorhombic phase. [ACS Appl. Ener. Mater (2019) 2, 654]. Our findings signify the importance of the material and their relevance for energy research.'),
('cmp', 'DFT study of a potential candidate for electrode material in photoelectrochemical cells (Arti Kashyap)',
'We employ first principles electronic calculations using density functional theory to understand the electronic and magnetic properties of different classes of materials including intermetallics, rare earth compounds, magnetic oxides, magnetoelectrics and so on. Bulk to thin films, nano clusters and heterostructures are dealt with to explore the potential use of these materials in various applications.'),
('cmp', 'Magnetization in Iron based compounds: A Machine Learning Model Analysis (AIP Advances, 2022) (Arti Kashyap)',
'We use machine learning to understand magnetism in different materials. '),
('cmp', 'Evidence of Lattice Strain as a Precursor to Superconductivity in BaPb0.75Bi0.25O3 (M Bharath, Jaskirat Brar, Himanshu Pant, Asif Ali, Sakshi Bansal, Ravi Shankar Singh, and R Bindu, Journal of Physics of Condensed Matter (2022))',
'In this work, we have investigated the precursor effects to superconductivity in BaPb0.75Bi0.25O3 using temperature dependent resistivity, x-ray diffraction technique and photoemission spectroscopy. The present compound exhibits superconductivity around 11 K (TC ). The synthesis procedure adopted is much simpler as compared to the procedure available in the literature. In the temperature range (10 K–25 K) i.e. above TC , our results show an increase in both the orthorhombic and tetragonal strain. The well screened features observed in Bi and Pb 4f7/2 core levels are indicative of the metallic nature of the sample. The compound exhibits finite intensity at the Fermi level at 300 K and this intensity decreases with decrease in temperature and develops into a pseudogap; the energy dependence of the spectral density of states suggests disordered metallic state. Furthermore, our band structure calculations reveal that the structural transition upon Pb doping results in the closing of the band gap at the Fermi level.'),
('cmp', 'Synthesis and structural link to the electronic and magneto-transport properties of spin–orbit Mott insulator Sr2IrO4 (Priyamedha Sharma, Saurabh Singh, Kentaro Kuga, Tsunehiro Takeuchi and R Bindu, J.Phys:Condens.Matter34 435402 (2022))',
 'We investigate the effect of sample preparation conditions on the link between the structural and physical properties of polycrystalline spin—orbit Mott insulator, Sr2IrO4. The samples were prepared in two batches. With the first batch prepared as per the commonly adopted procedure in literature and the second batch prepared adopting the same procedure as the first batch but with an additional annealing in vacuum. Interestingly, our results show that without change in the value of the Curie temperature (TC), there occurs increase in the value of magnetization, resistivity, magneto-resistance (MR) and an increase in temperature range of stabilization of the canted antiferromagnetic structure. The temperature behaviour of the difference in the irreversible magnetization between the samples is in line with the difference in the Ir–O–Ir in-plane bond angle. At low temperatures, the conduction mechanism in the first batch of the sample is mainly governed by disorder while in the case of the other sample it is of Arrhenius type. The magneto-transport results have shown its strong link with the disorder and structural results. Although the nature and mechanism of the disorder needs to be investigated further, the present results throw light on the role of disorder and its connectivity between the structure and physical properties to understand its complex behaviors'),
('cmp', 'Strain induced phase transition in La 0.2 Sr0.8MnO3 (Priyamedha Sharma, Swati Pathak, Himanshu Pant, and R. Bindu, Applied Physics A 128 , 271 (2022))',
'We explore the structural and magnetic tunability of polycrystalline La0.2Sr0.8MnO3 sample by varying preparation conditions using solid state reaction method. Low temperature X-ray diffraction studies indicate that one of the samples shows a transition from cubic Pm-3m structure to dominant tetragonal I4/mcm structure below ∼260K, while the other sample exhibits transformation from cubic structure to a dominant phase with fundamental reflections corresponding to P4/mmm tetragonal symmetry below ∼260K, followed by an incomplete transition from this phase to tetragonal I4/mcm phase below ∼225K. The Rietveld analysis at 260K indicates that the former sample exhibits co-existence of cubic Pm-3m, tetragonal I4/mcm and P4/mmm phases while the latter sample shows the co-existence of Pm-3m and tetragonal P4/mmm phases. Density functional theory(DFT+U) calculations suggest C-type antiferromagnetic and d3z2-r2 orbital ordering in I4/mcm structure and A-type antiferromagnetic with dx2-y2 orbital ordering in P4/mmm structure. The results show a possibility of tuning magnetic structure from C-type antiferromagnetic to A-type antiferromagnetic in an intermediate temperature range at fixed concentration, by varying the strain fields. At high temperatures(300–518K), the resistivity follows small polaron hopping model in both the samples and change in preparation conditions leads to a change over from adiabatic to non-adiabatic limit. Above 518K, both the samples exhibit metallic resistivity. Our results open a new avenue for tuning magnetic and structural phases in phase separated systems, and such tunability may be useful in antiferromagnetic spintronic, designing correlated electron-based electronic devices.'),
('cmp', 'Electron transport studies of the correlated electron materials (C.S.Yadav)', 'The electron correlations in the materials give rise to exotic low temperature quantum phenomena such as, Superconductivity, Topological surface states, Charge Density Wave, Metal to Insulator transition etc.  We are interested in the study of the  electrical and thermal transport properties of novel quantum materials to understand the underlying mechanism and behavior of these exciting phases of materials.'),
('cmp', 'Frustrated magnetism in pyrochlore system (C.S.Yadav)', 'Some of the pyrochlore systems are known to  exhibit spin ice magnetic states where the residual magnetic entropy of the system is equivalent to the entropy of the water ice. These systems are considered as the potential candidates for the magnetic monopole-like excitations. We are interested in the disordered pyrochlore system to understand the unusual spin freezing and the spin ice behavior of these materials.'),
('cmp', 'Quantum coherent transport in two-dimensional materials (Girish Sharma)', 'We aim to investigate quantum coherent transport in novel two-dimensional materials such as graphene, topological insulators etc. Our aim is to evaluate the key quantities like Diffuson and the Cooperon by using many-body perturbation theory both in real-space and in momentum-space.'),
('cmp', 'Electronic transport in topological materials (Girish Sharma)','We wish to investigate the unconventional transport properties of topological material such as Weyl semimetals, Dirac semimetals, and other non trivial topological states of matter. We employ quasiclassical Boltzmann formalism and other many-body quantum techniques to solve this problem.'),
('cmp', 'Quantum magnetism in 3D spin systems (Kaustav Mukherjee)', 'Study of quantum magnetism is a research field of current interest. An important developments in this area is the discovery of quantum materials which exhibits novel ground states like quantum criticality, quantum spin liquid (QSL), spin ice, high temperature superconductivity, strange metal behaviour, nematic fluctuations, low dimensional magnetism, effective spin – ½ ground state etc. Compounds based on traditional magnetic ions such as Cu2+, Ni2+ and Cr5+ have provided a fertile ground for many novel quantum states. In recent years, the focus has slightly shifted to explore quantum magnetism in insulating materials, mainly in 4f rare-earth based magnetic systems. The aim of this problem is to investigate the nature of near neighbors’ magnetic interactions and quantum magnetism in 3D spin systems'),
('cmp', 'Investigation of physical properties of ternary intermetallics RScX (R = Rare earth, X = Ga, Si, Ge, Sn) (Kaustav Mukherjee)','RScX alloys, where R = rare earths and X = Ga, Si, Ge and Sn have been subjected to rigorous investigation in the recent years in context of large magnetocaloric effect and magnetoresistance (MR) exhibited by them. This family of intermetallics crystallizes in hexagonal or tetragonal structures depending upon the constituents. The magnetic ordering temperature of these compounds varies from very low temperatures to temperatures well above room temperature. Members of this family show various physical properties such as Kondo effect, heavy fermionic behavior, spin-glass state, superconductivity, large positive and negative MR and multiple magnetic transitions. The aim of this problem is to investigate magnetic, magnetocaloric and electrical transport properties of a series of ternary intermetallics RScX (R = Rare earth and X = Ga, Si, Ge, Sn).'),
('cmp', 'Weyl semimetal candidates in Heusler alloys (Kaustav Mukherjee)', 'Weyl semimetals are exotic class of topological materials which provide a realization of chiral anomaly in condensed matter. The quasi-particle excitation of Weyl semimetals is Weyl fermion, which has a definite chirality. Heusler alloys have been subjected to extensive research because of the wide range of physical properties such as ferromagnetism, antiferromagnetism, spin polarization, half metallicity, topological phases, superconductivity etc., exhibited by them. It is feasible to search signatures of Weyl semimetals in either non centrosymmetric half Heusler alloys or the magnetic full Heusler alloys. The aim of this problem is to investigate potential Weyl semimetal candidates in the family of Heusler alloys.'),
('cmp', 'Study of magnetic and magnetocaloric properties in transition metal oxides and rare-earth intermetallics (Kaustav Mukherjee)','Magnetic refrigeration technique has been suggested as a potential technique that has prominent advantages over the currently used gas compression-expansion method in the sense of its high-efficiency, environmentally friendly applications. Magnetocaloric effect (MCE) provides a unique way of realizing magnetic refrigeration. Additionally, investigation of magnetocaloric parameters of materials can help in better understanding about the complex magnetic phases present in the system, which may not be possible just by studying magnetization. The aim of this problem is to characterize and study novel magnetic materials. The investigations will be carried out on mixed metal oxides belonging to 3d/4d/5d electron systems and intermetallics belonging to 4f electron systems.'),
('cmp','Quantum Materials (Pradeep Kumar)', 'Our goal is to probe and understand the dynamics of underlying quasiparticle excitations and phonons in quantum materials such as quasi one dimensional magnets, spin frustrated magnetic system, putative Kitaev spin liquids etc.'),
('cmp','Two dimensional Materials (Pradeep Kumar)', 'In 2D nanosystems, we use inelastic light scattering probe and transport measurements to understand the role of phonons in layered magnetic as well as non-magnetic two-dimensional materials. 
Secondly, material engineering, through tuning their different physical, electronic and thermal properties as a function of controlled tuning parameters such as strain.'),
('cmp', 'Fluctuations in quantum gases (Arko Roy)', 'Cooled to nano-Kelvin temperatures, Bose-Einstein condensates acquire macroscopic quantum properties. Observable in experiments, quantum gases give direct access to quantum physics. Be it the components of novel quantum technologies, or as simulators of condensed matter systems, it is of immense value to know 
the role by quantum and thermal fluctuations to a fine detail.
We explore the equilibrium and out-of-equilibrium properties of 
spinor Bose-Einstein condensates at finite temperatures.
'),
('cmp','Physics of two-dimensional (2D) transition metal mono-/di-chalcogenides (TMCs) (Suman Kalyan Pal)' ,'One of the major concerns about organic solar cells is their low efficiency. Recent studies have pointed out that poor absorption and low carrier mobility of organic materials are responsible for the limited performance of organic photovoltaic cells. Molecular orbital mismatch that governs the open circuit voltage is also an important factor. Therefore, synthesis of novel organic materials (polymers and small molecules), developing new device architectures, spectroscopic investigation on materials and electrical characterization of devices are some of the aims of this project to address the efficiency issue.'),
('cmp', 'Metal Halide Perovskite: Material Properties to Device Applications (Suman Kalyan Pal)','Research on metal halide perovskites (both inorganic and hybrid organic-inorganic) has largely arisen out of rapid progress in their photovoltaic applications. However, these materials are potentially suitable for a diverse optoelectronic application such as light emitting diodes, photodetectors and lasers. These applications are enabled by the favorable material properties, which include long charge carrier diffusion lengths, high absorption coefficients with a sharp absorption edge and remarkably high photoluminescence (PL) quantum efficiency. Understanding the excited state photo-carrier dynamics and interactions are crucial for elucidating the working mechanisms of optoelectronic devices. Thus, our research group is extensively involved to develop the fundamental understanding of important properties of these materials like electronic structure, absorption, emission, carrier dynamics and transport, and other relevant photophysical processes that have propelled these materials to the forefront of modern optoelectronics research. Moreover, we develop new perovskite materials and study their application possibility in optoelectronic devices.'),
('smp','Collective Dynamics of Active Grains (Harsh Soni)','Granular particles on a vibrating plate move horizontally when they are kicked by the plate. Our research focuses on the physics of collective motion of these active grains. In order to solve these problems, we use both numerical and analytical methods. Collaborations with experimental groups on such systems are also part of our work.'),
('smp','Physics of Microswimmers (Harsh Soni)','Microorganisms such as bacteria can be found in almost every living  thing. Mechanics of swimming microorganisms in complex fluids such as fluids breaking symmetries is one of our areas of interest. We are currently pursuing this class of problems analytically. However, we plan to implement numerical methods in the future as analytical methods always have limitations.'),
('hep','Bulk Reconstruction in AdS/CFT (Nirmalya Kajuri)','AdS/CFT correspondence is a map between two theories - a quantum theory of gravity in a higher dimensional space (bulk) and a conformal field theory in one lower dimension (boundary). The challenge is to translate between the two theories. The program of translating bulk physics in terms of the boundary is called Bulk Reconstruction. 

My research program involves understanding different aspects of Bulk Reconstruction.
'),
('hep','Decoherence in Inflationary Cosmology (Nirmalya Kajuri)','All structure in the Universe originates from primordial quantum fluctuations that occurred during the inflation phase in very early universe. There had to be a transition in the early universe from quantum fluctuations to classical before structure formation could take place. This is hypothesized to happen via decoherence.

I am interested in applying tools of open quantum systems to understand the process of decoherence.
');

CREATE TABLE `research_announcements` (
  `page` varchar(100) NOT NULL,
  `announcementTitle` varchar(100) NOT NULL,
  `announcementLink` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `research_announcements` (`page`, `announcementTitle`, `announcementLink`) VALUES
('cmp','Our group member Ms. Shailja Sharma joined IFW Dresden, Germany in August 2022, for the postdoctoral position', NULL),
('cmp','Our group member Ms. Sheetal got GNeus-Marie Curie fellowship for her postdoctoral work at Julich Centre for Neutron Science, Germany',NULL),
('cmp','Dr. Soni is a Senior Member The Institute of Electrical and Electronics Engineers (SM-IEEE)', NULL),
('cmp','Dr. Soni received the research excellence award 2021 on 12th foundation day of the IIT mandi', NULL),
('cmp','Dr. Soni is an Associate Editor for Journal Materials Lab', 'http://matlab.labapress.com/matlab/editorial_board'),
('cmp','Dr. Soni has been elected as Youth Editorial Board member for Journal Energy & Environmental Materials', 'https://onlinelibrary.wiley.com/page/journal/25750356/homepage/editorialboard.html'),
('cmp','Dr. Soni received the Bhaskara Advanced Solar Energy Research Fellowship funded by Indo US Science and Technology forum (BASE Fellow-2018)',NULL),
('cmp','Dr. Soni received the Young Scientist Research Award by DAE-BRNS, India (2015)', NULL),
('cmp','Dr. Soni is an Executive Board member of Society for Interdisciplinary Research in Materials and Biology', NULL),
('cmp','Possible realization of three-dimensional quantum spin liquid behavior in HoVO4 (Dheeraj Ranaut, S. S. Shastri, S. K. Pandey and K. Mukherjee, J. Phys. Condens. Matter 34, 485803 (2022))', NULL),
('cmp','Emergence of low-temperature glassy dynamics in Ru substituted non-magnetic insulator CaHfO3 (Gurpreet Kaur and K. Mukherjee, J. Phys. Condens. Matter 34, 415802 (2022))', NULL),
('cmp','Melting of spin ice state and development of fifth -order susceptibility with magnetic field in pyrochlore Tb2Sn2O7 (Karan Singh, Dheeraj Ranaut, G. Sharma and K. Mukherjee, New J. Phys. 24, 073037 (2022))', NULL),
('amo','Mr. Rajeev Ray has successfully defended his doctoral dissertation',null),
('amo','Mushtaq, A., Pradhan, B., Kushavah, D., Zhang, Y., Naumenko, D., Amenitsch, H., Hofkens, J. and Pal, S. K.,Femtosecond induced third-order optical nonlinearity in quasi 2D Ruddlesden–Popper perovskite film deciphered using Z-scan. Materials Advances., 3, 8211-8219 (2022)',null),
('cmp','Unravelling the signatures of effective spin ½ moments in CeVO4: Magnetization and Heat Capacity study (Dheeraj Ranaut and K. Mukherjee, J. Phys. Condens. Matter 34, 315802 (2022))', NULL),
('smp','Abhishek Sharma selected for PMRF, 2022','d22027@students.iitmandi.ac.in');

CREATE TABLE `students` (
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `page` varchar(100) DEFAULT NULL,
  `degree` varchar(100) NOT NULL,
  `field` varchar(150) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `students`(`name`, `email`,`page`, `degree`,`field`, `image`) VALUES
('Bharath M','d16074@students.iitmandi.ac.in','cmp','phd','Properties of strongly correlated electron systems','students/bharath.png'),
('Jaskirat Brar','jaskiratb23@gmail.com','cmp','phd','Quantum phase transitions in transition metal compounds','students/jaskirat.png'),
('Gurpreet Kaur','d17038@students.iitmandi.ac.in','cmp','phd','Magnetic and thermal properties of mixed metal oxides','students/gurpreet.png'),
('Sonu Chhillar','D17039@students.iitmandi.ac.in','cmp','phd','Multiferroics - 6H-perovskite Materials','students/sonu.png'),
('Milon Kundar','d18031@students.iitmandi.ac.in ','','phd','Optical properties and application of Perovskitese ','students/milon.png'),
('Sonika','d18040@students.iitmandi.ac.in','cmp','phd','Electronic transport of transition metal dichalcogenides, topological materials','students/sonika.png'),
('Swati Pathak','d18042@students.iitmandi.ac.in','cmp','phd','Electronic and local structure study of Heusler compounds','students/swati.png'),
('Divya Rawat','divyarawat131@gmail.com','cmp','phd','Optical properties of layered chalcogenide materials','students/divya.png'),
('Himanshu Pant','d19015@students.iitmandi.ac.in','cmp','phd','Experimental studies of electronic structure for double perovskite oxides and intermetallic alloys','students/himanshu.png'),
('Dheeraj','dheerajranaut13@gmail.com','cmp','phd','Quantum magnetism in  rare earth orthovanadates','students/dheeraj.png'),
('Azaz Ahmad ','D19049@students.iitmandi.ac.in','cmp','phd','Theoretical condensed matter physics','students/azaz.png'),
('Addepalli Lavakumar','d20034@students.iitmandi.ac.in','amo','phd','Exploring cavity field states in Quanutm Dots-PhC cavity system','students/addepalli.png'),
('Ashish Soni','ashishsonyweb@gmail.com','amo','phd','Ultrafast dynamical behaviour of quasi-particles in 2D transition metal dichalcogenides','students/ashish.png'),
('Ankit Kashyap','d20037@students.iitmandi.ac.in','cmp','phd','Investigation of Thermoelectrics ','students/ankit.png'),
('Sandeep Kushawah','d20064@students.iitmandi.ac.in','smp','phd','Statistical and Dynamical Properties of Lennard Jones systems','students/sandeep_kushawah.png'),
('Nasaru Khan','D20066@students.iitmandi.ac.in','cmp','phd','Quasiparticle Dynamics of 2D Materials','students/nasaru.png'),
('Ishita Ghorai ','d20068@students.iitmandi.ac.in','amo','phd','Quantum Monodromy in effective polyad breaking Hamiltonian','students/ishita.png'),
('Gautham Varma K','d20069@students.iitmandi.ac.in','cmp','phd','Theoretical condensed matter physics','students/gautham.png'),
('Devansu Chakraborty','devansu3242@gmail.com','','phd','Study of metallic glasses via simulations','students/devansu.png'),
('Sunil kumar V','D21082@students.iitmandi.ac.in ','amo','phd','Theoretical ultracold quantum gases','students/sunil.png'),
('Shilpa Verma','d21083@students.iitmandi.ac.in','cmp','phd','Chalcogenide Phase Change Materials','students/shilpa.png'),
('Atul Chakkar','d21085@students.iitmandi.ac.in','cmp','phd','Phonon dynamics in 2D materials.','students/atul.png'),
('Arundhati Goldar ','d21086@students.iitmandi.ac.in','hep','phd','Investigating the quantum nature of cosmological peturbation ','students/arundhati.png'),
('Nagendra S Kamath','nknagu24@gmail.com','amo','phd','Study of ultrafast many-body interactions in 2D transition metal dichalcogenides ','students/nagendra.png'),
('Rhitaparna pal','d21089@students.iitmandi.ac.in','hep','phd','Theoretical high energy physics','students/rhitaparna.png'),
('Koushik P','koushikprao1@gmail.com','cmp','phd','Physical properties of Heusler alloys','students/koushik.png'),
('Sharshad','d22026@students.iitmandi.ac.in','cmp','phd','Investigation of the properties of compounds that exhibit quantum phase transition','students/sharshad.png'),
('Abhishek Sharma ','d22027@students.iitmandi.ac.in','smp','phd',' Study of the motile rods in the nematic medium of nonmotile  rods','students/abhishek.png'),
('Sandeep Singh','d22028@students.iitmandi.ac.in','cmp','phd','Theoretical studies of multi-component condensates of dilute atomic gases. ','students/sandeep_singh.png'),
('Kuldeep Prajapat ','D22091@students.iitmandi.ac.in ','amo','phd','Atomic and molecular physics ','students/kuldeep.png'),
('Bharti','d22092@students.iitmandi.ac.in','','phd','Dynamical and Statistical properties of many-particle systems of chiral rings','students/bharti.png'),
('Yogesh','yogi.khatri.aa@gmail.com','cmp','i-phd','Material informatics','students/yogesh.png'),
('Adesh Singh','singhadesh01@gmail.com','','i-phd','Theoretical condensed matter physics','students/adesh.png'),
('Vivek ','di1702@students.iitmandi.ac.in','cmp','i-phd','Investigation of quantum materials via phonon dynamics.','students/vivek_kumar.png'),
('Sahil Bhandari','sahilbhandari1998@gmail.com','','i-phd','Ultrafast carrier dynamics in 2D perovskite.','students/sahil.png'),
('Vivek Pandey','di1903@students.iitmandi.ac.in','cmp','i-phd','Topological and transport ','students/vivek_pandey.png'),
('Bhumit Luhar ','di1905@students.iitmandi.ac.in','','i-phd','Optoelectronic and electronic properties of 2D Transition metal dichalcogenides ','students/bhumit.png'),
('Aditya Singh','di20027@students.iitmandi.ac.in','cmp','i-phd','Transport Properties of Quantum Materials','students/aditya.png'),
('Prakash Pandey ','di20028@students.iitmandi.ac.in','','i-phd','Electronic and phononic based properties of materials','students/prakash.png'),
('Jogendra ','di20029@students.iitmandi.ac.in','cmp','i-phd','Quasi-Low dimensional and frustrated quantum magnetic systems.','students/jogendra.png'),
('Aksa Thomas','Di20030@students.iitmandi.ac.in','','i-phd','Quantum Devices Based on Heterostructure of 2D Materials','students/aksa.png'),
('Shubhanshu Karoliya','ud22005@students.iitmandi.ac.in','cmp','dual','Theoretical condensed matter physics','students/shubhanshu.png'),
('Manshi Rani','ud22006@students.iitmandi.ac.in','cmp','dual','Quantum Magnetism','students/manshi.png'),
('Shivani Bhardwaj','di1904@students.iitmandi.ac.in','cmp','i-phd','Strongly correlated electron systems (Theoretical condensed matter physics)','students/shivani.png'),
('Vivek P','di2201@students.iitmandi.ac.in','','i-phd','Stability of molecular clusters using Conjugate-Gradiate method.','students/vivek_p.png'),
('Sonia','d21084@students.iitmandi.ac.in','cmp','phd','Phonons and quasiparticle excitations in quantum materials.','students/sonia.png'),
('Kewal Singh Rana','d18041@students.iitmandi.ac.in','cmp','phd','Thermoelectric Properties of Minerals (Experimental Condensed Matter Physics))','students/kewal.png'),
('Bhuwan Joshi','di2207@students.iitmandi.ac.in','smp','i-phd','Development of numerical algorithms using Split-operator technique:Case studies on Nose Hoover thermodstat and higher order schemes"(soft condensed matter physics) ','default.png'),
('Shraddha Chowdhury','di2204@students.iitmandi.ac.in','','i-phd','Dressed basis method for matrix diagonalization(Computational Physics)','default.png'),
('Siddhartha Mithiya','di2205@students.iitmandi.ac.in','amo','i-phd','Second Harmonic Generation in Nonlinear optice','students/siddhartha.png'),
('Kartik Madan','di21001@students.iitmandi.ac.in','amo','i-phd','Electron Scattering Studies (Atomic and Molecular Physics))','students/kartik.png'),
('Rasheed Shaik','di1602@students.iitmandi.ac.in','amo','i-phd','Structure & Dynamics of Atomic/Cluster systems','students/rasheed.png'),
('Anjali','di1703@students.iitmandi.ac.in','amo','i-phd','Theoretical understanding of solvation dynamics of an electron and dipole.','students/anjali.png'),
('Keshav Thakur','di1706@students.iitmandi.ac.in','smp','i-phd','Soft matter physics ','students/keshav'),
('Nidhi Chamoli','di1704@students.iitmandi.ac.in','amo','i-phd','Effective Hamiltonian study for isomerising systems','students/nidhi.png'),
('Sheeshram Siddh','di2206@students.iitmandi.ac.in','ac','i-phd','Cosmology','students/sheeshram.png'),
('Dheeraj Ranaut','d19048@students.iitmandi.ac.in','cmp','i-phd','Quantum magnetism in  rare earth orthovanadates (Experimental condensed matter physics)','students/dheeraj.png'),
('Sahil Bhandari','di1705@students.iitmandi.ac.in','amo','i-phd','Ultrafast carrier dynamics in 2D perovskite.','students/sahil.png');



CREATE TABLE `alumni` (
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `passing_year` varchar(100) DEFAULT NULL,
  `thesis_title` varchar(150) DEFAULT NULL,
  `degree` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `alumni`(`name`, `passing_year`,`thesis_title`, `degree`) VALUES
('Afsal Thuppilakkadan','2022','Photoionization studies of endohedral atoms','phd'),
('R. Priyamedha Sharma K. ','2022','Interplay of structural, electronic and magnetic properties in 3d and 5d based transition metal compounds','phd'),
('Sheetal Devi','2022','Spin ice and spin freezing in disordered pyrochlore zirconates','i-phd'),
('Ruchika Mahajan','2022','Ab-initio of MnO2 polymorphs using density functional theory','i-phd'),
('Rajeev Ray','2022','Towards efficient solution processed perovskite optoelectronic devices','phd'),
('Shubhanjali Pathak','2021','Competition between vitrification and crystallization in lennard-jones binary mixture','phd'),
('Duni Chand Thakur','2021','Role of attractive interactions in the dynamics of a supercooled binary mixture','phd'),
('Kavita Yadav','2021','Probing the correlation between valence electron count and physical properties of heusler alloys','i-phd'),
('Niraj Kumar Singh','2021','Structure-property correlation in layered bi-ge-te topological insulators for thermoelectric applications','phd'),
('Imran Ahamed','2020','Ab-intio studies of exotic properties of e-Fe2o3','phd'),
('Rohit Pathak','2020','First principles investigation of some rare-earth free permanent magnets','phd'),
('Manoj Das','2020','Study of hybrid optomechanical systems','phd'),
('Juhi Pandey','2020','Light matter interactions in metal chalcogenides investigated by optical spectroscopy','phd'),
('Aamir Mushtaq','2020','Third order optical nonlinearity and ultrafast carrier dynamics in two dimensional materials and their heterostructures in femtosecond regime','phd'),
('Birender Singh','2020','Phonons, quasiparticle excitations and their coupling in iridium based double perovskites','phd'),
('Supriya Ghosh','2019','Photoinduced processes in organo lead halide perovskite bulk crystals, nanocrystals and thin films','phd'),
('Jitendra Kumar Verma','2019','Resonant nonlinear interaction of light in photonic crystal cavity-quantum dot systems','phd'),
('Karan Singh','2019','Magnetic, thermodynamic and electrical transport properties of ce-based intermetallics','phd'),
('Surender Lal','2019','Structural, magnetic, dielectric and thermodynamics studies of layered perovskite LnBaCuFeO5','phd'),
('Harmanpreet Singh','2019','Phonon assisted non-linear interaction and quantum entanglement in semiconductor cavity quantum electro dynamics','phd'),
('Jalim Singh','2018','Microscopic structure and dynamics of glass transition under phase separation in a model linear polymer melt','phd'),
('Abdus Salam Sarkar','2018','Emerging two-dimensional materials and their van der waals heterostructures','phd'),
('Anna Varughese','2018','A molecular dynamics study of glass transition under phase separation in pure and glass forming binary Lennard-Jones liquids','phd'),
('Mohit Kumar Sharma','2018','Investigation of physical properties of rare earth and transition metal based oxides and intermetallics showing significant magnetocaloric effect','phd'),
('Somnath Acharya','2018','Investigation of physical properties of bulk metal chalcogenide materials for thermoelectric applications','phd'),
('Mandeep Kumar Hooda','2018','Study of electronic transport properties of transition metal tellurides: CuxPdTe2 (x = 0,0.04), ZrTe3 and ZrTe5','phd'),
('Renu','2017','Magnetism and magnetoelectric effect in thin films and bilayers of chromia','phd'),
('Navneet Singh','2017','Electronic and structural studies of transition metal oxides','phd'),
('Rajiv Kumar Maurya','2017','Investigation of the structural connectivity with the physical properties of ilmenite and pyroxene based oxides','phd'),
('K. Sindhu','2016','Photoionization studies of some closed shell atoms and ions','phd'),
('Ashish Kumar','2016','Photoionization dynamics of some free and confined atomic systems','phd'),
('Pushpendra Kumar','2016','Energy and electron transfer as probe of the interfacial interaction between quantum dot and organic molecule','phd'),
('Pankaj Kumar','2014','Ab-initio, analytical and micromagnetic study of low-dimensional materials and intermetallic alloys','phd'),
('Akash','2020','','msc'),
('Pankaj Kumar','2020','','msc'),
('Sagar Rewadia','2020','','msc'),
('Jagriti Ahuja','2020','','msc'),
('Shumile ahmed siddiqui','2020','','msc'),
('Pooja Manral','2020','','msc'),
('Sardar Dilbag Singh Khalsa','2020','','msc'),
('Monu Mehta','2020','','msc'),
('Yogesh Yadav','2020','','msc'),
('Arshad','2020','','msc'),
('Nikesh Kumar','2020','','msc'),
('Anurag Kumar','2020','','msc'),
('Ekta Kumari Kumari','2020','','msc'),
('Rahul Dhankhar','2020','','msc'),
('santosh kumar sahu','2020','','msc'),
('Deenbandhu Sharma','2020','','msc'),
('Bhisma Narayan Mahanty','2020','','msc'),
('Sonu Kumar Kuldeep','2020','','msc'),
('Rahul Sharma','2020','','msc'),
('Gourav','2020','','msc'),
('Kirti','2020','','msc'),
('Sunita Tarei','2020','','msc'),
('Kundan Verma','2021','','msc'),
('Apoorav Singh Deo','2021','','msc'),
('Sushank Mishra','2021','','msc'),
('Kashik Chauhan','2021','','msc'),
('Shagun Kumar','2021','','msc'),
('Sonali Kumawat','2021','','msc'),
('Rakesh Somarwal','2021','','msc'),
('Jayant Kumar Gupta','2021','','msc'),
('Mahaveer','2021','','msc'),
('Rajendra Kumar Raigar','2021','','msc'),
('Sumit Kumar','2021','','msc'),
('Vinod Kumar Solet','2021','','msc'),
('Alka Kumari','2021','','msc'),
('Vinit','2021','','msc'),
('Gulshan Sharma','2021','','msc'),
('Monika Singh','2021','','msc'),
('Avinesh Kumar','2021','','msc'),
('Shyam Sundar Meena','2021','','msc'),
('Karun Gadge','2021','','msc'),
('Akansha Verma','2021','','msc'),
('Prithivraj G','2021','','msc'),
('Brijesh Gupta','2021','','msc'),
('Apoorv Dashora','2021','','msc'),
('Rupal Gupta','2021','','msc'),
('Abhishek Pandey','2021','','msc'),
('Kanika Rani','2021','','msc'),
('Vikas Yadav','2021','','msc'),
('Pratibha Yadav','2021','','msc'),
('Anannya Mukherjee','2022','','msc'),
('Diksha Prajapati','2022','','msc'),
('Sushil','2022','','msc'),
('Bhimani  Yogin Jitendrabhai ','2022','','msc'),
('Anjali','2022','','msc'),
('Anshu Tyagi','2022','','msc'),
('ARUNA','2022','','msc'),
('Rohit Gupta','2022','','msc'),
('Sandhya A K','2022','','msc'),
('Nalinikanta Pradhan','2022','','msc'),
('Sandeep Patel','2022','','msc'),
('Afra Navas','2022','','msc'),
('Gunjan','2022','','msc'),
('Biswarup Biswas','2022','','msc'),
('Arun Pandiyan','2022','','msc'),
('Nitin Kumar','2022','','msc'),
('Pankaj Kumar','2022','','msc'),
('Ankush Kamal','2022','','msc'),
('Anayat Ullha','2022','','msc'),
('Sankalp Sharma','2022','','msc'),
('Sreeshyam V A','2022','','msc'),
('Sahil Kumar','2022','','msc'),
('Shad Mohamed A K','2022','','msc'),
('Vinod Kumar','2022','','msc'),
('Liza Helen K','2022','','msc');
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;