CREATE DATABASE  IF NOT EXISTS `amigodamente` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `amigodamente`;
-- MySQL dump 10.13  Distrib 8.0.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: amigodamente
-- ------------------------------------------------------
-- Server version	8.0.21

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `dica_usuario`
--

DROP TABLE IF EXISTS `dica_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dica_usuario` (
  `id_dica_usuario` int NOT NULL AUTO_INCREMENT,
  `texto` varchar(1000) NOT NULL,
  PRIMARY KEY (`id_dica_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dica_usuario`
--

LOCK TABLES `dica_usuario` WRITE;
/*!40000 ALTER TABLE `dica_usuario` DISABLE KEYS */;
INSERT INTO `dica_usuario` VALUES (1,'Percebeu mudanças na rotina dele(a)? Pergunte a ele(a) como se sente e esteja sempre disposto a escutá-lo(a).'),(2,'Se atente aos comentários que ele(a) faz, muitas vezes uma pessoa com transtorno de ansiedade e/ou depressão fala sobre seus gatilhos corriqueiramente. Diante desses tipos de comentários aconselhe a pessoa a procurar um profissional da área de saúde mental.'),(3,'Lembre-se que uma pessoa com ansiedade e/ou depressão não escolhe estar nesse estado de saúde mental, seja paciente e procure sempre motivá-lo(a) a pensar que essa fase irá passar.'),(4,'Sempre dê espaço para que a pessoa possa compreender o que ela está sentindo, muitas vezes na ânsia de ajudar alguém acabamos pressionando a resposta sobre uma certa situação. Um ótimo auxílio é deixar que o processo ocorra no tempo do doente, demonstre ser alguém próximo e de confiança, mas não o force a pular etapas.'),(5,'A ansiedade e a depressão precisam deixar de serem tabus nas rodas de conversas, se informe e converse com seus parentes e amigos sobre os sintomas e tratamentos.'),(6,'Os transtornos de ansiedade e depressão podem ser desenvolvidos em fases difíceis como a adolescência, o desemprego, o luto, no entanto, eles não podem ser ignorados por essas questões. Se você observa que alguém têm sofrido demais por conta de mudanças de fases, aconselhe-o(a) a procurar um profissional da área de saúde mental.'),(7,'A rede de apoio é um dos melhores remédios no tratamento psicológico dos transtornos de ansiedade e/ou depressão, se for possível, participe das sessões do tratamento junto ao paciente, assim, gerando maior acolhimento a ele(a).');
/*!40000 ALTER TABLE `dica_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fale_conosco`
--

DROP TABLE IF EXISTS `fale_conosco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fale_conosco` (
  `id_fale_conosco` int NOT NULL AUTO_INCREMENT,
  `questao` varchar(500) NOT NULL,
  `resposta` varchar(500) NOT NULL,
  `tipo` enum('problema','elogio','duvida') NOT NULL,
  PRIMARY KEY (`id_fale_conosco`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fale_conosco`
--

LOCK TABLES `fale_conosco` WRITE;
/*!40000 ALTER TABLE `fale_conosco` DISABLE KEYS */;
INSERT INTO `fale_conosco` VALUES (1,'Como realizo cadastro no site?','No cabeçalho do site se encontra a área “Cadastro”, em que o usuário irá inserir seus dados pessoais e poderá se cadastrar no site Amigos da Mente.','duvida'),(2,'Onde encontro conteúdo específicos sobre os transtornos mentais?','No cabeçalho do site, temos as abas “Ansiedade” onde se encontram os textos específicos desse transtorno e, na aba “Depressão” conteúdos respectivos ao transtorno depressivo.','duvida'),(3,'Vocês são psicólogos?','Não, somos um grupo de estudantes da ETEC Parque da Juventude do curso de Informática para Internet. No entanto, mantemos contato com profissionais da área da saúde mental afim de tornar o conhecimento sobre esse assunto mais acessível.','duvida'),(4,'Fazem recomendações de psicólogos?','Não, apesar de mantemos contato com profissionais da área de saúde mental não realizamos recomendações dos mesmos.','duvida'),(5,'Realizam consultas com psicólogos online?','Não oferecemos esse tipo de serviço.','duvida'),(6,'O site só aborda ansiedade e depressão?','Sim, apesar de esses não serem os únicos transtornos mentais reconhecidos pela medicina, nosso site tem foco apenas em ansiedade e depressão.','duvida'),(7,'Gostei dos conteúdos sobre depressão.','Obrigado! Estamos trabalhando para deixar o site cada vez melhor para os nossos usuários.','elogio'),(8,'Gostei dos conteúdos sobre ansiedade.','Obrigado! Estamos trabalhando para deixar o site cada vez melhor para os nossos usuários.','elogio'),(9,'O site possuí um design muito agradável.','Obrigado! Estamos trabalhando para deixar o site cada vez melhor para os nossos usuários.','elogio'),(10,'Os textos são bem informativos e possuem uma linguagem de fácil compreensão.','Obrigado! Estamos trabalhando para deixar o site cada vez melhor para os nossos usuários.','elogio'),(11,'O contato com a equipe Amigos da Mente foi rápido e satisfatório.','Obrigado! Estamos trabalhando para deixar o site cada vez melhor para os nossos usuários.','elogio'),(12,'As dicas sobre os transtornos mentais são objetivas e bem informativas.','Obrigado! Estamos trabalhando para deixar o site cada vez melhor para os nossos usuários.','elogio'),(13,'Não consigo realizar o cadastro.','Verifique se os dados inseridos estão corretos e se o seu e-mail foi confirmado.','problema'),(14,'Não consigo realizar o login.','Verifique se os dados inseridos na área de login coincidem com os dados inseridos na área de cadastro.','problema'),(15,'Não encontro nas dúvidas frequentes a minha dúvida.','Envie um e-mail para a equipe Amigos da Mente em amigosdamente@gmail.com.','problema'),(16,'O design do site não está agradável.','Estamos trabalhando para deixar o site mais agradável para os nossos usuários.','problema'),(17,'O contato com a equipe Amigos da Mente não foi satisfatório.','Estamos trabalhando para que isso não ocorra mais e o contato com a equipe seja cada vez mais satisfatório para os nossos usuários.','problema'),(18,'As dicas sobre os transtornos mentais não são objetivas e informativas.','Estamos trabalhando para deixar o site mais agradável para os nossos usuários.','problema');
/*!40000 ALTER TABLE `fale_conosco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mensagem`
--

DROP TABLE IF EXISTS `mensagem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mensagem` (
  `id_mensagem` int NOT NULL AUTO_INCREMENT,
  `mensagem` varchar(500) NOT NULL,
  `tipo` enum('duvida','elogio','reclamacao') NOT NULL,
  `email` varchar(500) NOT NULL,
  `data_envio` date NOT NULL,
  `data_resposta` date DEFAULT NULL,
  PRIMARY KEY (`id_mensagem`)
) ENGINE=MyISAM AUTO_INCREMENT=125 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mensagem`
--

LOCK TABLES `mensagem` WRITE;
/*!40000 ALTER TABLE `mensagem` DISABLE KEYS */;
INSERT INTO `mensagem` VALUES (1,'Obrigado','elogio','final@final.01','2020-12-02',NULL),(2,'Obrigado','elogio','final@final.01','2020-12-02',NULL),(3,'Posso?','','final@final.01','2020-12-02',NULL),(4,'','','final@final.01','2020-12-02',NULL),(5,'','','final@final.01','2020-12-02',NULL),(6,'','','final@final.01','2020-12-02',NULL),(7,'','','final@final.01','2020-12-02',NULL),(8,'','','final@final.01','2020-12-02',NULL),(9,'','','final@final.01','2020-12-02',NULL),(10,'','','final@final.01','2020-12-02',NULL),(11,'','','final@final.01','2020-12-02',NULL),(12,'','','final@final.01','2020-12-02',NULL),(13,'','','final@final.01','2020-12-02',NULL),(14,'','','final@final.01','2020-12-02',NULL),(15,'','','final@final.01','2020-12-02',NULL),(16,'','','final@final.01','2020-12-02',NULL),(17,'','','final@final.01','2020-12-02',NULL),(18,'','','final@final.01','2020-12-02',NULL),(19,'','','final@final.01','2020-12-02',NULL),(20,'','','final@final.01','2020-12-02',NULL),(21,'','','final@final.01','2020-12-02',NULL),(22,'','','final@final.01','2020-12-02',NULL),(23,'','','final@final.01','2020-12-02',NULL),(24,'','','final@final.01','2020-12-02',NULL),(25,'','','final@final.01','2020-12-02',NULL),(26,'','','final@final.01','2020-12-02',NULL),(27,'','','final@final.01','2020-12-02',NULL),(28,'','','final@final.01','2020-12-02',NULL),(29,'','','final@final.01','2020-12-02',NULL),(30,'','','final@final.01','2020-12-02',NULL),(31,'','','final@final.01','2020-12-02',NULL),(32,'','','final@final.01','2020-12-02',NULL),(33,'','','final@final.01','2020-12-02',NULL),(34,'','','final@final.01','2020-12-02',NULL),(35,'','','final@final.01','2020-12-02',NULL),(36,'','','final@final.01','2020-12-02',NULL),(37,'','','final@final.01','2020-12-02',NULL),(38,'','','final@final.01','2020-12-02',NULL),(39,'','','final@final.01','2020-12-02',NULL),(40,'','','final@final.01','2020-12-02',NULL),(41,'','','final@final.01','2020-12-02',NULL),(42,'','','final@final.01','2020-12-02',NULL),(43,'','','final@final.01','2020-12-02',NULL),(44,'','','final@final.01','2020-12-02',NULL),(45,'','','final@final.01','2020-12-02',NULL),(46,'','','final@final.01','2020-12-02',NULL),(47,'','','final@final.01','2020-12-02',NULL),(48,'','','final@final.01','2020-12-02',NULL),(49,'','','final@final.01','2020-12-02',NULL),(50,'','','final@final.01','2020-12-02',NULL),(51,'','','final@final.01','2020-12-02',NULL),(52,'','','final@final.01','2020-12-02',NULL),(53,'','','final@final.01','2020-12-02',NULL),(54,'','','final@final.01','2020-12-02',NULL),(55,'','','final@final.01','2020-12-02',NULL),(56,'','','final@final.01','2020-12-02',NULL),(57,'','','final@final.01','2020-12-02',NULL),(58,'','','final@final.01','2020-12-02',NULL),(59,'','','final@final.01','2020-12-02',NULL),(60,'','','final@final.01','2020-12-02',NULL),(61,'','','final@final.01','2020-12-02',NULL),(62,'','','final@final.01','2020-12-02',NULL),(63,'','','final@final.01','2020-12-02',NULL),(64,'','','final@final.01','2020-12-02',NULL),(65,'','','final@final.01','2020-12-02',NULL),(66,'','','final@final.01','2020-12-02',NULL),(67,'','','final@final.01','2020-12-02',NULL),(68,'','','final@final.01','2020-12-02',NULL),(69,'','','final@final.01','2020-12-02',NULL),(70,'','','final@final.01','2020-12-02',NULL),(71,'','','final@final.01','2020-12-02',NULL),(72,'','','final@final.01','2020-12-02',NULL),(73,'','','final@final.01','2020-12-02',NULL),(74,'','','final@final.01','2020-12-02',NULL),(75,'','','final@final.01','2020-12-02',NULL),(76,'','','final@final.01','2020-12-02',NULL),(77,'','','final@final.01','2020-12-02',NULL),(78,'','','final@final.01','2020-12-02',NULL),(79,'','','final@final.01','2020-12-02',NULL),(80,'','','final@final.01','2020-12-02',NULL),(81,'','','final@final.01','2020-12-02',NULL),(82,'','','final@final.01','2020-12-02',NULL),(83,'','','final@final.01','2020-12-02',NULL),(84,'','','final@final.01','2020-12-02',NULL),(85,'','','final@final.01','2020-12-02',NULL),(86,'','','final@final.01','2020-12-02',NULL),(87,'','','final@final.01','2020-12-02',NULL),(88,'','','final@final.01','2020-12-02',NULL),(89,'','','final@final.01','2020-12-02',NULL),(90,'','','final@final.01','2020-12-02',NULL),(91,'','','final@final.01','2020-12-02',NULL),(92,'','','final@final.01','2020-12-02',NULL),(93,'','','final@final.01','2020-12-02',NULL),(94,'','','final@final.01','2020-12-02',NULL),(95,'','','final@final.01','2020-12-02',NULL),(96,'','','final@final.01','2020-12-02',NULL),(97,'','','final@final.01','2020-12-02',NULL),(98,'','','final@final.01','2020-12-02',NULL),(99,'','','final@final.01','2020-12-02',NULL),(100,'','','final@final.01','2020-12-02',NULL),(101,'','','final@final.01','2020-12-02',NULL),(102,'','','final@final.01','2020-12-02',NULL),(103,'','','final@final.01','2020-12-02',NULL),(104,'','','final@final.01','2020-12-02',NULL),(105,'','','final@final.01','2020-12-02',NULL),(106,'','','final@final.01','2020-12-02',NULL),(107,'','','final@final.01','2020-12-02',NULL),(108,'','','final@final.01','2020-12-02',NULL),(109,'','','final@final.01','2020-12-02',NULL),(110,'','','final@final.01','2020-12-02',NULL),(111,'','','final@final.01','2020-12-02',NULL),(112,'','','final@final.01','2020-12-02',NULL),(113,'','','final@final.01','2020-12-02',NULL),(114,'','','final@final.01','2020-12-02',NULL),(115,'','','final@final.01','2020-12-02',NULL),(116,'','','final@final.01','2020-12-02',NULL),(117,'','','final@final.01','2020-12-02',NULL),(118,'','','final@final.01','2020-12-02',NULL),(119,'','','final@final.01','2020-12-02',NULL),(120,'','','final@final.01','2020-12-02',NULL),(121,'','','final@final.01','2020-12-02',NULL),(122,'','','final@final.01','2020-12-02',NULL),(123,'','','final@final.01','2020-12-02',NULL),(124,'Não pode ser','reclamacao','final@final.01','2020-12-02',NULL);
/*!40000 ALTER TABLE `mensagem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `email` varchar(256) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `preferencia` enum('ansiedade','depressao','ambos') NOT NULL,
  `data_cadastro` date DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'1111111111111','Mandioquinha@daterra.com.br','','ansiedade','2020-11-10'),(2,'Renato Nascimento','teste@teste.com','','ansiedade','2020-11-10'),(3,'Renato Nascimento','teste@teste.com2','','ansiedade','2020-11-10'),(4,'Renato Nascimento','teste@teste.com3','','ansiedade','2020-11-10'),(5,'Renato Nascimento','teste@teste.com4','','ansiedade','2020-11-10'),(6,'Renato Nascimento','teste@teste.com5','','depressao','2020-11-11'),(7,'Renato Nascimento','teste@teste.com6','','ambos','2020-11-11'),(8,'Renato Nascimento','teste@teste.com7','','depressao','2020-11-11'),(9,'Renato Nascimento','teste@teste.com8','','ambos','2020-11-11'),(10,'Renato Nascimento','teste@teste.com9','','depressao','2020-11-11'),(11,'Renato Nascimento','teste@teste.com10','','ambos','2020-11-11'),(12,'Renato Nascimento','teste@teste.com11','','depressao','2020-11-11'),(13,'Renato Nascimento','teste@teste.com12','','ambos','2020-11-15'),(14,'Renato Nascimento','teste@teste.com13','','depressao','2020-11-15'),(15,'Renato Nascimento','teste@teste.com14','','ansiedade','2020-11-15'),(16,'Renato Nascimento','teste@teste.com15','','ambos','2020-11-15'),(17,'Vitória','vitória@teste01','','ambos','2020-11-24'),(18,'vitória','vitoria@teste.01','','ambos','2020-11-24'),(19,'Naomi','naomi@gmail.01','','ansiedade','2020-12-01'),(20,'Naomi','naomi@gmail.02','','ansiedade','2020-12-01'),(21,'Naomi','naomi@gmail.03','','depressao','2020-12-01'),(22,'Naomi','naomi@gmail.04','f0eebeb9943bc9b46b8b1a5322550f3c','depressao','2020-12-01'),(23,'Renato Nascimento','final@final.01','25d55ad283aa400af464c76d713c07ad','ambos','2020-12-01');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-12-01 22:20:37
