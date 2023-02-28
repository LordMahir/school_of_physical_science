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

INSERT INTO `announcements` (`announcementTitle`, `announcementLink`) VALUES
('New Announcement Here', 'https://students.iitmandi.ac.in/main/'),
('New Announcement Here', 'https://students.iitmandi.ac.in/main/'),
('', NULL),
('Announcement with no link ', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `newsTitle` varchar(100) NOT NULL,
  `newsImage` varchar(100) DEFAULT NULL,
  `newsLink` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`newsTitle`, `newsImage`, `newsLink`) VALUES
('New news Here', 'news.jpg', 'https://google.com'),
('New news Here', 'news.jpg', 'https://google.com'),
('New news Here', 'news.jpg', 'https://google.com');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eventTitle` varchar(100) NOT NULL,
  `eventLink` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eventTitle`, `eventLink`) VALUES
('Testing Google Link', 'https://www.google.com'),
('New Title', NULL),
('New Title', NULL);
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
  `recentPublications`) VALUES
('Suman Kalyan Pal','Indian Association for the Cultivation of Science','Chairperson & Professor','chairsps@iitmandi.ac.in','01905-267040','faculty/Suman.jpeg','http://faculty.iitmandi.ac.in/~suman/USOLab/','Physics of two-dimensional (2D) transition metal mono-/di-chalcogenides (TMCs)!Exciton dynamics in 2D materials and quantum dots (QDs) and multiple exciton generation!Metal Halide Perovskite: Material Properties to Device Applications!Organic Photovoltaics: materials and devices','Soni, A; Pal, S. K. Valley degree of freedom in two-dimensional van der Waals materials J. Phys. D: Appl. Phys. 2022, 55, 303003. https://doi.org/10.1088/1361-6463/ac5bc9!Mushtaq, A.; Pradhan, B; Kushavah, D.; Zhang, Y; Wolf, M.; Schrenker, N.; Fron, E.; Bals, S.; Hofkens, J.; Pal, S. K. Third-Order Nonlinear Optical Properties and Saturation of Two-Photon Absorption in Lead-Free Double Perovskite Nanocrystals under Femtosecond Excitation ACS Photonics, 2021, 8, 3365. https://doi.org/10.1021/acsphotonics.1c01351!Ray, R.; Pal, S. K. Solution-Processed Photoinduced Multilevel Resistive Switching Devices Based on Lead-Free All-Inorganic Perovskite IEEE Electron Device Lett., 2021, 42, 1284.https://doi.org/10.1109/LED.2021.3094895!Soni, A; Kushavah, D; Lu, L; Chang, W. H.; Pal, S. K. Ultrafast Exciton Trapping and Exciton−Exciton Annihilation in Large-Area CVD-Grown Monolayer WS2 J. Phys. Chem. C 2021, 125, 23880. https://doi.org/10.1021/acs.jpcc.1c06267!Sarkar, A. S.; Mushtaq, A.; Kushavah, D; Pal, S. K.  Liquid exfoliation of electronic grade ultrathin tin(II) sulfide (SnS) with intriguing optical response NPJ 2D Mater. Appl. 2020,4,1. https://doi.org/10.1038/s41699-019-0135-1'),
('Ajay Soni','UGC-DAE Consortium for Scientific Research, Indore, MP','Associate Professor','ajay@iitmandi.ac.in','01905-267854','faculty/AjaySoni.jpg','http://faculty.iitmandi.ac.in/~ajay/ ','Experimental Condensed Matter Physics, Nanomaterials for Future Energy, Mesoscopic Physics and Nano-functional Devices, Thermoelectric and Optoelectronic Materials','Electron-Phonon Coupling and Quantum Correction to Topological Magnetoconductivity in Bi2GeTe4,Niraj Singh, Divya Rawat, Dibyendu Dey, Anna Elsukova, Per O. A. Persson, Per Eklund, A. Taraphder and Ajay Soni. https://journals.aps.org/prb/accepted/40074Yc8X5717176861f41291fcdfac2e8ea17999 ! Glassy Thermal Conductivity in Cs3Bi2I6Cl3 Single Crystal, Paribesh Acharyya, Tanmoy Ghosh, Koushik Pal, Kewal Singh Rana, Moinak Dutta, Diptikanta Swain, Martin Etter, Ajay Soni, Umesh V. Waghmare, and Kanishka Biswas.Nature Communications (2022) https://www.nature.com/ncomms/ ! Enhanced atomic ordering leads to high thermoelectric performance in AgSbTe2, Subhajit Roychowdhury, Tanmoy Ghosh, Raagya Arora, Manisha Samanta, Lin Xie, Niraj Kumar Singh, Ajay Soni, Jiaqing He, U.V. Waghmare and K. Biswas, Science 371, 722-727(2021) https://science.sciencemag.org/content/371/6530/722?fbclid=IwAR01s1LHQR57B33lfeInfhWDwS1HCEef6sBAoU7h60nIdoKtbVWy74wkFQ0!Ultralow Thermal Conductivity and Thermoelectric Properties of Bi4GeTe7 with an Intrinsic van der Waal Heterostructure, Niraj Singh, Ankit Kashyap and Ajay Soni, Applied Physics Letters, 119, 223903 (2021), https://aip.scitation.org/doi/10.1063/5.0076785!Local Ferroelectric Polarization in Antiferroelectric Chalcogenide Perovskite BaZrS3 Thin Film, Juhi Pandey, Debjit Ghoshal, Dibyendu Dey, Tushar Gupta, A. Taraphder, Nikhil Koratkar and Ajay Soni, Phys Rev B 102, 205308(2020), https://journals.aps.org/prb/accepted/2f07aZ25J821ee00d1133d001ed8bec735ba562ad?fbclid=IwAR3HsBGR5yNOKj-GWdr_vNeSWWFPwycIGttUIcpgYk9z65uayI6nxVrUxeQ'),
('Bindu Radhamany','UGC-DAE Consortium for Scientific Research, Indore, M.P.','Associate Professor','bindu@iitmandi.ac.in','01905-267060','faculty/Bindu.jpg','','My broad area of interest is experimental condensed matter physics. My research interest lies in understanding the evolution of electronic structure and associated local and global structural changes in various complex transition metal oxides across various electronic and magnetic phase transitions. The techniques that I use are x-ray diffraction, x-ray absorption spectroscopy (XAS), photoelectron spectroscopy, magnetotransport measurements etc. I also use computational tools to understand the observed spectra. I am currently working on materials that show quantum phase transition, superconductivity, phase separation, disorder effects, spintronic effects etc.','Synthesis and structural link to the electronic and magneto-transport properties of spin–orbit Mott insulator Sr2IrO4; Priyamedha Sharma, Saurabh Singh, Kentaro Kuga, Tsunehiro Takeuchi and R Bindu;J.Phys: Condens. Matter 34 435402 (2022). !Strain induced phase transition in La 0.2 Sr0.8MnO3;Priyamedha Sharma, Swati Pathak, Himanshu Pant, and R. Bindu; Applied Physics A 128, 271 (2022). !Structural and electronic effects in GdCu alloy; Priyamedha Sharma; Jaskirat Brar, Bharath M, Bindu R; J. Phys: Condens.Matter 32 305603 (2020) !Interplay of lattice distortion and electronic structure in BaBiO3; Bharath M, Priyamedha Sharma, Jaskirat Brar, R.K. Maurya, and R. Bindu; J. Phys.: Condens. Matter 32, 055504 (2020) !Evidence of nanoscale structural phase separation in large bandwidth La0.2Sr0.8MnO3; R. Bindu, Sanjay Singh, Navneet Singh, Rajeev Ranjan, Kalobaran Maiti, A. H. Hill, and S. R. Barman; Phys. Rev. B 86, 140104(R) (2012)'),
('C.S. Yadav','Jawaharlal Nehru University, New Delhi','Associate Professor','shekhar@iitmandi.ac.in','','faculty/Shekhar.jpg','https://iitmandi.ac.in/CMP/files/CSY%20webpage/CSY_homepage.php','Experimental Condensed Matter Physics, Strongly Correlated Electron Systems, Superconductivity, Topological phases of matter, Thermoelectricity, Quantum Magnetism, Multiferroics','S. Chhillar, K. Mukherjee, and C.S. Yadav Large magnetodielectric coupling in the vicinity of  metamagnetic transition in 6H-perovskite Ba3GdRu2O9, Journal of Physics: Condensed Matter 34, 145801 (2022) ! Shailja Sharma, Shiv Kumar, G.C. Tewari, G. Sharma, E.K. Schwier, Kenya Shimada, A. Taraphder,  and C.S. Yadav Magnetotransport and high resolution angle –resolved photoemission spectroscopy studies of palladium doped Bi2Te3, Physical Review B 105, 115120 (2022) ! Sonika, M.K. Hooda, Shailja Sharma, and C.S.Yadav Planar Hall effect in Cu intercalated PdTe2, Applied Physics Letter  119, 261904 (2021) ! Sheetal, and C.S. Yadav Evolution of spin freezing transition and structural, magnetic phase diagram of Dy2-xLaxZr2O7; x = 0- 2.0, Scientific Reports 11, 19832 (2021) ! Shailja Sharma, and C.S. Yadav Experimental setup for Seebeck and Nernst coefficient measurements Review of Scientific Instruments 91, 123907 (2020)'),
('Hari Verma','IIT Madras','Associate Professor','','','faculty/Hari.jpg','http://faculty.iitmandi.ac.in/~hari/','Theoretical/computational studies on Structure and dynamics of  atomic systems, ionization and scattering studies of atoms, clusters and endohedral systems, Wigner time-delay studies in the atto-second regime','Near-threshold Cooper minimum in the photoionisation of the 2p subshell of sodium atom and its impact on the angular distribution parameter, Nishita hosea, Jobin Jose and Hari R. Varma, J.  Phys. B: At.  Mol. Opt. Phys. 55, 135001(2022) ! Confinement enhanced spin-orbit interchannel coupling effect on the atomic photoionization, Afsal Thuppilakkadan, Jobin Jose and Hari R. Varma, J.  Phys. B: At.  Mol. Opt. Phys. 54 145001(2021) ! Collective effects in photoionization of sodium clusters: plasmon resonance spill, induced attractive force and correlation minimum, Rasheed Shaik, Hari R Varma and Himadri S Chakraborty, J.  Phys. B: At.  Mol. Opt. Phys. 54, 125101(2021) ! Electronic structure and dynamics of confined atoms, P. C. Deshmukh, J. Jose, H. R. Varma, and S. T. Manson,  The European Physical Journal D, 75: Article No.166, 2021 ! A systematic study of Coulomb Confinement Resonances of atoms trapped inside charged fullerene        (A@C q 60), Afsal Thuppilakkadan, Jobin Jose and Hari R Varma, Phys. Rev. A, 102, 062826 (2020)'),
('Kaustav Mukherjee','UGC-DAE Consortium for Scientific Research, Indore, India','Assistant Professor','kaustav@iitmandi.ac.in','01905-267043','faculty/Kaustav.jpg','http://faculty.iitmandi.ac.in/~kaustav/','Strongly Correlated Electron Systems, Quantum Magnetism, Low Dimensional and Frustrated Magnetism, Oxides and Intermetallics, Heusler Alloys, Multiferroics ','Unravelling the signatures of effective spin ½ moments in CeVO4: Magnetization and Heat Capacity study Dheeraj Ranaut and K. Mukherjee J. Phys. Condens. Matter 34, 315802 (2022) ! Optical phonon modes assisted thermal conductivity in p-type ZrIrSb Half-Heusler alloy: A combined experimental and computational study Kavita Yadav, S. Singh, T. Takeuchi, and K. Mukherjee J. Phys. D: Appl. Phys. 54, 495303 (2021) ! Coexistance of non-Fermi liquid behavior and bi-quadratic exchange coupling in La-substituted CeGe: Non-linear susceptibility and DFT + DMFT study Karan Singh, A. Sihi, S. K. Pandey and K. Mukherjee Phys. Rev. B 102, 235137 (2020) ! Effect of (Cu/Fe)O5 bipyramid size and separation on magnetic and dielectric properties of rare earth layered perovskite LaBaCuFeO5 and LuBaCuFeO5 Surender Lal, C. S. Yadav and K. Mukherjee J. Appl. Phys. 126, 144101 (2019) ! Complex magnetic behavior and evidence of superspin glass state in a binary intermetallic compound Er5Pd2 Mohit K. Sharma, Kavita Yadav and K. Mukherjee J. Phys.: Condens. Matter 30, 215803 (2018) '),
('Pradeep Kumar','IISc Bangalore','Assistant Professor','pkumar@iitmandi.ac.in','01905-267137','faculty/PradeepKumar.jpg','http://faculty.iitmandi.ac.in/~pkumar/','Quantum and 2D Materials -: The competition between various microscopic degrees of freedom in Quantum materials provides fertile ground to observe exotic ground states such as the Quantum Spin Liquid (QSL), a state which precludes long range ordering of spins even at absolute zero. Systems with QSL as their ground state are anticipated to be topologically active and to host exotic low energy fractionalized quasi-particle excitations. Our central focus is to probe and manipulate the quasi-particle excitations in quantum materials using Raman as a function of simultaneous different perturbations such as low temperature, strain and electric field. This also has the potential to open up doors to manipulate quantum degrees of freedom, i.e. electron spin and photon polarization, which are at the heart of quantum computation and communication. In 2D nanosystems, our focus is twofold first to explore and generate fundamental understanding about the exciting and challenging physics of 2D systems using in-situ Raman spectroscopy as a function of simultaneous different perturbations, such as gating coupled with strain down to liquid He temperature. Secondly, material engineering, through tuning their different physical, electronic and thermal properties as a function of controlled tuning parameters such as strain. ','Electron-Phonon Coupling, Thermal Expansion Coefficient, Resonance Effect and Phonon Dynamics in High Quality CVD Grown Mono and Bilayer MoSe2, Phys. Rev. B 105, 085419 (2022). ! Fractional Spin fluctuations and quantum liquid signature in Gd2ZnIrO6, Phys. Rev. B 104, 134402 (2021). ! Anisotropic Electron-Photon-Phonon Coupling in Layered MoS2, J. Phys.: Condens. Matter 32, 415702  (2020). ! Kitaev Magnetism and Fractionalized Excitations in Double Perovskite Sm2ZnIrO6, Phys. Rev. Research 2, 013040 (2020). ! Kramer doublets, phonons, crystal-field excitations and their coupling in Nd2ZnIrO6, Phys. Rev. Research 2, 023162 (2020).'),
('Pradyuman K Pathak','','','','','faculty/pathak.jpg','','',''),
('Prasanth P. Jose','IISc Bangalore','Associate Professor','prasanth@iitmandi.ac.in','','faculty/ppj.jpg','','Dynamics of systems near phase transitions. Glass transition in low density model systems. Study of ergodicity and its relation to chaos in small systems. Computational modeling of materials. Simulations of biopolymers. Phase transitions in liquid crystals Properties of polymer melts and solutions. Dynamics of complex systems. Non-equilibrium dynamics.','Violation of Stokes–Einstein and Stokes–Einstein–Debye relations in polymers at the gas-supercooled liquid coexistence, Jalim Singh and Prasanth P Jose, J. Phys.: Condens. Matter, 33 055401(2021) ! Relation between density relaxation and density of the first coordination shell in a supercooled linear polymer melt, Jalim Singh, D. C. Thakur, and Prasanth P. Jose, AIP Conference Proceedings 2265, 030220 (2020) ! Similarities between protein folding and granular jamming, Prasanth P. Jose, and Ioan Andricioaei, Nature Communications, 3, 1161(2012). ! Single-chain dynamics in a semidilute polymer solution under steady shear, Prasanth P. Jose, and Grzegorz Szamel, J. Chem. Phys. 128, 224910 (2008). ! Complete breakdown of the Debye model of rotational relaxation near the isotropic-nematic phase boundary: Effects of intermolecular correlations in orientational dynamics, Prasanth P. Jose, Dwaipayan Chakrabarti, and Biman Bagchi, Phys. Rev. E, 73, 31705 (2006).'),
('Arko Roy','Physical Research Laboratory','Assistant Professor','arko@iitmandi.ac.in','01905-267722','faculty/pathak.jpg','https://faculty.iitmandi.ac.in/~arko/','','');


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;