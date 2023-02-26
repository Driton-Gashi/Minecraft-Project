-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2023 at 11:27 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minecraft_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `blocks_data`
--

CREATE TABLE `blocks_data` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `likes` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `foods_data`
--

CREATE TABLE `foods_data` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `likes` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mobs_data`
--

CREATE TABLE `mobs_data` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `likes` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mobs_data`
--

INSERT INTO `mobs_data` (`id`, `name`, `image`, `views`, `likes`) VALUES
(1, 'Zombie', '1675516319zombie.png', 0, 19),
(2, 'Skeleton', '1676991823skeleton.png', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` varchar(2000) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `author` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `authorID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `date`, `author`, `image`, `authorID`) VALUES
(1, 'Minecraft: A Game That Defines a Generation', 'Minecraft is a sandbox video game that has captured the hearts and minds of millions of players worldwide. Launched in 2011, the game has become a cultural phenomenon, attracting players of all ages and backgrounds.\r\n\r\nThe game is set in a randomly generated 3D world, where players can build and explore to their heart\'s content. The game mechanics are simple and intuitive, making it accessible to players of all skill levels. The objective of the game is to gather resources, build structures, and survive against monsters that come out at night.\r\n\r\nOne of the key features of Minecraft is its open-ended gameplay, allowing players to create and build whatever their imagination can conjure up. From towering skyscrapers to intricate underground tunnels, players have constructed some truly remarkable structures. The game also has a vibrant online community where players can share their creations and collaborate on projects.\r\n\r\nAnother important aspect of Minecraft is its educational value. The game has been used in classrooms around the world to teach subjects such as mathematics, science, and engineering. The game also fosters creativity, problem-solving skills, and teamwork, making it a valuable tool for students and teachers alike.\r\n\r\nDespite its age, Minecraft continues to evolve and grow, with new updates and features being added regularly. The game is available on a wide range of platforms, including PC, Xbox, PlayStation, Nintendo Switch, and mobile devices, ensuring that players can enjoy Minecraft wherever they go.\r\n\r\nIn conclusion, Minecraft is a game that has stood the test of time and has become a cornerstone of modern gaming culture. Whether you\'re a seasoned player or a newcomer, there\'s something in Minecraft for everyone. So why not give it a try and join the millions of players already building and exploring in the blocky world of Minecraft?\r\n\r\n\r\n\r\n', '2023-02-06', 'driton', '1675716908img-2.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tools_data`
--

CREATE TABLE `tools_data` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `likes` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL DEFAULT '../assets/img/icons/profile-image(default).png',
  `role` varchar(20) NOT NULL DEFAULT 'subscriber'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `image`, `role`) VALUES
(1, 'Driton Gashi', '$2y$10$3y/1JoEdtJtJOW4VzByjSO0CuoUnkBbuv7yULHjsg1wDDeaTaf3im', '1675690541profile-image(Driton).png', 'admin'),
(2, 'ermali', '$2y$10$rT34rACN6FJn554kNGMV9uADa8iowcMFAtbhgZ4UoM12.n383q38.', '1675716576shota.jpg', 'admin'),
(4, 'JohnDoe', '$2y$10$apNDUjZshzVxF/QEzi27bO4naEnxY5nI0ScH5eUNDTg9cyyla8MYG', '1676886129johnDoe.webp', 'subscriber'),
(5, 'Cupcake', '$2y$10$p8DNwmXSk723M/4VVBRhDu0X/jqQKy4IsbzKU2dKExXkxNdcnIWY2', '1676886343animeGirl.webp', 'subscriber'),
(7, 'Monkey D. Luffy', '$2y$10$RKj8.mN6fJd9n/QDxJbj6OAlmT2WzK8kUrGV3fGvaoAhnpWMQH2VK', '1676888567luffy.webp', 'subscriber'),
(10, 'EdiRugova', '$2y$10$.2iNHUESP0CLoKE6LFxTVe4.Vf5Uiuo2l0BRBd9W0XrchzQMZJbwm', '1676991688', 'subscriber');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blocks_data`
--
ALTER TABLE `blocks_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foods_data`
--
ALTER TABLE `foods_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobs_data`
--
ALTER TABLE `mobs_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tools_data`
--
ALTER TABLE `tools_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blocks_data`
--
ALTER TABLE `blocks_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `foods_data`
--
ALTER TABLE `foods_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mobs_data`
--
ALTER TABLE `mobs_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tools_data`
--
ALTER TABLE `tools_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
