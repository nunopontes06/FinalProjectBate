
CREATE TABLE `declaracao` (
  `declararid` int(11) NOT NULL,
  `fotoid` int(11) NOT NULL,
  `viaturaid` int(11) NOT NULL,
  `outraviaturaid` int(11) NOT NULL,
  `token` int(20) NOT NULL
);


CREATE TABLE `fotocidente` (
  `fotoid` int(11) NOT NULL,
  `file_name` varchar(400) NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
);

CREATE TABLE `outrasviaturas` (
  `outraviaturaid` int(11) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `matricula` varchar(50) NOT NULL,
  `paismatricula` varchar(50) NOT NULL,
  `tipoveiculo` varchar(50) NOT NULL,
  `companhia` varchar(50) NOT NULL,
  `numeroapolice` varchar(50) NOT NULL,
  `nift` varchar(50) NOT NULL,
  `nomet` varchar(50) NOT NULL,
  `apelidot` varchar(50) NOT NULL,
  `moradat` varchar(50) NOT NULL,
  `cpostt` varchar(50) NOT NULL,
  `telefonet` varchar(50) NOT NULL,
  `nifc` varchar(50) NOT NULL,
  `nomec` varchar(50) NOT NULL,
  `apelidoc` varchar(50) NOT NULL,
  `moradac` varchar(50) NOT NULL,
  `cpostc` varchar(50) NOT NULL,
  `paistc` varchar(50) NOT NULL,
  `datanasc` varchar(50) NOT NULL,
  `telefonec` varchar(50) NOT NULL,
  `datavc` varchar(50) NOT NULL,
  `emailc` varchar(50) NOT NULL,
  `numerocartac` varchar(50) NOT NULL,
  `categoriac` varchar(50) NOT NULL,
  `danos` varchar(50) NOT NULL,
  `circunstancias` varchar(50) NOT NULL,
  `observacoes` varchar(50) NOT NULL,
  `paist` varchar(50) NOT NULL
);


CREATE TABLE `ternaria` (
  `viaturaid` int(11) NOT NULL,
  `utilizadorid` int(11) NOT NULL,
  `declararid` int(11) NOT NULL
);

CREATE TABLE `ternariab` (
  `declararid` int(11) NOT NULL,
  `versodeclarid` int(11) NOT NULL
);

CREATE TABLE `utilizador` (
  `utilizadorid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nif` varchar(50) NOT NULL,
  `morada` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL,
  `cpost` varchar(50) NOT NULL,
  `pdf` mediumblob NOT NULL
);

CREATE TABLE `utilizador_viatura` (
  `viaturaid` int(11) NOT NULL,
  `utilizadorid` int(11) NOT NULL
);

CREATE TABLE `versodeclaracao` (
  `versodeclarid` int(11) NOT NULL,
  `datar` varchar(50) NOT NULL,
  `ocorrencia` varchar(50) NOT NULL,
  `segurado` varchar(50) NOT NULL,
  `ferido` varchar(50) NOT NULL,
  `autoridade` varchar(50) NOT NULL,
  `objetos` varchar(50) NOT NULL
);

CREATE TABLE `viatura` (
  `viaturaid` int(11) NOT NULL,
  `trn_date` varchar(50) NOT NULL,
  `matricula` varchar(50) NOT NULL,
  `paismatricula` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `companhia` varchar(50) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `modelo` varchar(50) NOT NULL
);

CREATE TABLE `viaturab` (
  `viaturabid` int(11) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `matricula` varchar(50) NOT NULL,
  `paismatricula` varchar(50) NOT NULL,
  `tipoveiculo` varchar(50) NOT NULL,
  `companhia` varchar(50) NOT NULL,
  `numeroapolice` varchar(50) NOT NULL,
  `nift` varchar(50) NOT NULL,
  `nomet` varchar(50) NOT NULL,
  `apelidot` varchar(50) NOT NULL,
  `moradat` varchar(50) NOT NULL,
  `cpostt` varchar(50) NOT NULL,
  `telefonet` varchar(50) NOT NULL,
  `nifc` varchar(50) NOT NULL,
  `nomec` varchar(50) NOT NULL,
  `apelidoc` varchar(50) NOT NULL,
  `moradac` varchar(50) NOT NULL,
  `cpostc` varchar(50) NOT NULL,
  `paistc` varchar(50) NOT NULL,
  `datanasc` varchar(50) NOT NULL,
  `telefonec` varchar(50) NOT NULL,
  `datavc` varchar(50) NOT NULL,
  `emailc` varchar(50) NOT NULL,
  `numerocartac` varchar(50) NOT NULL,
  `categoriac` varchar(50) NOT NULL,
  `danos` varchar(50) NOT NULL,
  `circunstancias` varchar(50) NOT NULL,
  `observacoes` varchar(50) NOT NULL,
  `paist` varchar(50) NOT NULL,
  `token` int(20) DEFAULT NULL
);

ALTER TABLE `declaracao`
  ADD PRIMARY KEY (`declararid`);

ALTER TABLE `fotocidente`
  ADD PRIMARY KEY (`fotoid`);

ALTER TABLE `outrasviaturas`
  ADD PRIMARY KEY (`outraviaturaid`);

ALTER TABLE `ternaria`
  ADD PRIMARY KEY (`declararid`,`utilizadorid`,`viaturaid`);

ALTER TABLE `utilizador`
  ADD PRIMARY KEY (`utilizadorid`),
  ADD UNIQUE KEY `email` (`email`);

ALTER TABLE `utilizador_viatura`
  ADD PRIMARY KEY (`viaturaid`,`utilizadorid`);

ALTER TABLE `versodeclaracao`
  ADD PRIMARY KEY (`versodeclarid`);

ALTER TABLE `viatura`
  ADD PRIMARY KEY (`viaturaid`);

ALTER TABLE `viaturab`
  ADD PRIMARY KEY (`viaturabid`);

ALTER TABLE `declaracao`
  MODIFY `declararid` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `fotocidente`
  MODIFY `fotoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

ALTER TABLE `outrasviaturas`
  MODIFY `outraviaturaid` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `utilizador`
  MODIFY `utilizadorid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

ALTER TABLE `utilizador_viatura`
  MODIFY `viaturaid` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `versodeclaracao`
  MODIFY `versodeclarid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

ALTER TABLE `viatura`
  MODIFY `viaturaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

ALTER TABLE `viaturab`
  MODIFY `viaturabid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

ALTER TABLE `declaracao`
  ADD CONSTRAINT `declaracao_ibfk_1` FOREIGN KEY (`fotoid`) REFERENCES `fotocidente` (`fotoid`),
  ADD CONSTRAINT `declaracao_ibfk_2` FOREIGN KEY (`viaturaid`) REFERENCES `viatura` (`viaturaid`),
  ADD CONSTRAINT `declaracao_ibfk_3` FOREIGN KEY (`outraviaturaid`) REFERENCES `outrasviaturas` (`outraviaturaid`);

ALTER TABLE `ternaria`
  ADD CONSTRAINT `ternaria_ibfk_1` FOREIGN KEY (`utilizadorid`) REFERENCES `utilizador` (`utilizadorid`),
  ADD CONSTRAINT `ternaria_ibfk_2` FOREIGN KEY (`viaturaid`) REFERENCES `viatura` (`viaturaid`),
  ADD CONSTRAINT `ternaria_ibfk_3` FOREIGN KEY (`declararid`) REFERENCES `declaracao` (`declararid`);

ALTER TABLE `ternariab`
  ADD CONSTRAINT `ternariab_ibfk_1` FOREIGN KEY (`declararid`) REFERENCES `declaracao` (`declararid`),
  ADD CONSTRAINT `ternariab_ibfk_2` FOREIGN KEY (`versodeclarid`) REFERENCES `versodeclaracao` (`versodeclarid`);

ALTER TABLE `utilizador_viatura`
  ADD CONSTRAINT `utilizador_viatura_ibfk_1` FOREIGN KEY (`viaturaid`) REFERENCES `viatura` (`viaturaid`),
  ADD CONSTRAINT `utilizador_viatura_ibfk_2` FOREIGN KEY (`utilizadorid`) REFERENCES `utilizador` (`utilizadorid`);
