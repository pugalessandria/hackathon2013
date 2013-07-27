<?php

namespace PUGAL\Bundle\Hackathon2013Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="row")
 */
class Row {
  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;

  /**
   * @ORM\Column(type="string", length=256, nullable=true)
   */
  protected $ANNO_ESERCIZIO;

  /**
   * @ORM\Column(type="string", length=256, nullable=true)
   */
  protected $ANNO_IMPEGNO;

  /**
   * @ORM\Column(type="string", length=256, nullable=true)
   */
  protected $AREA;

  /**
   * @ORM\Column(type="string", length=256, nullable=true)
   */
  protected $CATEGORIA;

  /**
   * @ORM\Column(type="string", length=256, nullable=true)
   */
  protected $CODIGE_GESTION;

  /**
   * @ORM\Column(type="string", length=256, nullable=true)
   */
  protected $DESCRIZIONE_CAPITOLO;

  /**
   * @ORM\Column(type="string", length=256, nullable=true)
   */
  protected $DIFF_IN_MENO_CASSA;

  /**
   * @ORM\Column(type="string", length=256, nullable=true)
   */
  protected $DIFF_IN_PIU_CASSA;

  /**
   * @ORM\Column(type="string", length=256, nullable=true)
   */
  protected $ECCEDENZE;

  /**
   * @ORM\Column(type="string", length=256, nullable=true)
   */
  protected $ECCEDENZE_TOTALI;

  /**
   * @ORM\Column(type="string", length=256, nullable=true)
   */
  protected $ECONOMIE;

  /**
   * @ORM\Column(type="string", length=256, nullable=true)
   */
  protected $ECONOMIE_TOTALI;

  /**
   * @ORM\Column(type="string", length=256, nullable=true)
   */
  protected $FINANZIAMENTO;

  /**
   * @ORM\Column(type="string", length=256, nullable=true)
   */
  protected $NUM_CAPITOLO;

  /**
   * @ORM\Column(type="string", length=256, nullable=true)
   */
  protected $PAGAMENTI_CASSA;

  /**
   * @ORM\Column(type="string", length=256, nullable=true)
   */
  protected $PREVIS_FINALE_CASSA;

  /**
   * @ORM\Column(type="string", length=256, nullable=true)
   */
  protected $PROGETTO;

  /**
   * @ORM\Column(type="string", length=256, nullable=true)
   */
  protected $PROGRAMMA;

  /**
   * @ORM\Column(type="string", length=256, nullable=true)
   */
  protected $SOMME_DA_RIPORTARE;

  /**
   * @ORM\Column(type="string", length=256, nullable=true)
   */
  protected $SOMME_DA_RIPORT_TOTALI;

  /**
   * @ORM\Column(type="string", length=256, nullable=true)
   */
  protected $SOMME_IMPEGNATE;

  /**
   * @ORM\Column(type="string", length=256, nullable=true)
   */
  protected $SOMME_PAGATE;

  /**
   * @ORM\Column(type="string", length=256, nullable=true)
   */
  protected $STANZ_COMPET_IMPEGN_INIZ_ESERC;

  /**
   * @ORM\Column(type="string", length=256, nullable=true)
   */
  protected $TITOLO;

  /**
   * @ORM\Column(type="string", length=256, nullable=true)
   */
  protected $VOCE_ECO;

  /**
   * @ORM\Column(type="string", length=256, nullable=true)
   */
  protected $CAPITOLO_ORIGINE;

  /**
   * Get id
   *
   * @return integer
   */
  public function getId() {
    return $this->id;
  }

  /**
   * Set ANNO_ESERCIZIO
   *
   * @param string $aNNOESERCIZIO
   * @return Row
   */
  public function setANNOESERCIZIO($aNNOESERCIZIO) {
    $this->ANNO_ESERCIZIO = $aNNOESERCIZIO;

    return $this;
  }

  /**
   * Get ANNO_ESERCIZIO
   *
   * @return string
   */
  public function getANNOESERCIZIO() {
    return $this->ANNO_ESERCIZIO;
  }

  /**
   * Set ANNO_IMPEGNO
   *
   * @param string $aNNOIMPEGNO
   * @return Row
   */
  public function setANNOIMPEGNO($aNNOIMPEGNO) {
    $this->ANNO_IMPEGNO = $aNNOIMPEGNO;

    return $this;
  }

  /**
   * Get ANNO_IMPEGNO
   *
   * @return string
   */
  public function getANNOIMPEGNO() {
    return $this->ANNO_IMPEGNO;
  }

  /**
   * Set AREA
   *
   * @param string $aREA
   * @return Row
   */
  public function setAREA($aREA) {
    $this->AREA = $aREA;

    return $this;
  }

  /**
   * Get AREA
   *
   * @return string
   */
  public function getAREA() {
    return $this->AREA;
  }

  /**
   * Set CATEGORIA
   *
   * @param string $cATEGORIA
   * @return Row
   */
  public function setCATEGORIA($cATEGORIA) {
    $this->CATEGORIA = $cATEGORIA;

    return $this;
  }

  /**
   * Get CATEGORIA
   *
   * @return string
   */
  public function getCATEGORIA() {
    return $this->CATEGORIA;
  }

  /**
   * Set CODIGE_GESTION
   *
   * @param string $cODIGEGESTION
   * @return Row
   */
  public function setCODIGEGESTION($cODIGEGESTION) {
    $this->CODIGE_GESTION = $cODIGEGESTION;

    return $this;
  }

  /**
   * Get CODIGE_GESTION
   *
   * @return string
   */
  public function getCODIGEGESTION() {
    return $this->CODIGE_GESTION;
  }

  /**
   * Set DESCRIZIONE_CAPITOLO
   *
   * @param string $dESCRIZIONECAPITOLO
   * @return Row
   */
  public function setDESCRIZIONECAPITOLO($dESCRIZIONECAPITOLO) {
    $this->DESCRIZIONE_CAPITOLO = $dESCRIZIONECAPITOLO;

    return $this;
  }

  /**
   * Get DESCRIZIONE_CAPITOLO
   *
   * @return string
   */
  public function getDESCRIZIONECAPITOLO() {
    return $this->DESCRIZIONE_CAPITOLO;
  }

  /**
   * Set DIFF_IN_MENO_CASSA
   *
   * @param string $dIFFINMENOCASSA
   * @return Row
   */
  public function setDIFFINMENOCASSA($dIFFINMENOCASSA) {
    $this->DIFF_IN_MENO_CASSA = $dIFFINMENOCASSA;

    return $this;
  }

  /**
   * Get DIFF_IN_MENO_CASSA
   *
   * @return string
   */
  public function getDIFFINMENOCASSA() {
    return $this->DIFF_IN_MENO_CASSA;
  }

  /**
   * Set DIFF_IN_PIU_CASSA
   *
   * @param string $dIFFINPIUCASSA
   * @return Row
   */
  public function setDIFFINPIUCASSA($dIFFINPIUCASSA) {
    $this->DIFF_IN_PIU_CASSA = $dIFFINPIUCASSA;

    return $this;
  }

  /**
   * Get DIFF_IN_PIU_CASSA
   *
   * @return string
   */
  public function getDIFFINPIUCASSA() {
    return $this->DIFF_IN_PIU_CASSA;
  }

  /**
   * Set ECCEDENZE
   *
   * @param string $eCCEDENZE
   * @return Row
   */
  public function setECCEDENZE($eCCEDENZE) {
    $this->ECCEDENZE = $eCCEDENZE;

    return $this;
  }

  /**
   * Get ECCEDENZE
   *
   * @return string
   */
  public function getECCEDENZE() {
    return $this->ECCEDENZE;
  }

  /**
   * Set ECCEDENZE_TOTALI
   *
   * @param string $eCCEDENZETOTALI
   * @return Row
   */
  public function setECCEDENZETOTALI($eCCEDENZETOTALI) {
    $this->ECCEDENZE_TOTALI = $eCCEDENZETOTALI;

    return $this;
  }

  /**
   * Get ECCEDENZE_TOTALI
   *
   * @return string
   */
  public function getECCEDENZETOTALI() {
    return $this->ECCEDENZE_TOTALI;
  }

  /**
   * Set ECONOMIE
   *
   * @param string $eCONOMIE
   * @return Row
   */
  public function setECONOMIE($eCONOMIE) {
    $this->ECONOMIE = $eCONOMIE;

    return $this;
  }

  /**
   * Get ECONOMIE
   *
   * @return string
   */
  public function getECONOMIE() {
    return $this->ECONOMIE;
  }

  /**
   * Set ECONOMIE_TOTALI
   *
   * @param string $eCONOMIETOTALI
   * @return Row
   */
  public function setECONOMIETOTALI($eCONOMIETOTALI) {
    $this->ECONOMIE_TOTALI = $eCONOMIETOTALI;

    return $this;
  }

  /**
   * Get ECONOMIE_TOTALI
   *
   * @return string
   */
  public function getECONOMIETOTALI() {
    return $this->ECONOMIE_TOTALI;
  }

  /**
   * Set FINANZIAMENTO
   *
   * @param string $fINANZIAMENTO
   * @return Row
   */
  public function setFINANZIAMENTO($fINANZIAMENTO) {
    $this->FINANZIAMENTO = $fINANZIAMENTO;

    return $this;
  }

  /**
   * Get FINANZIAMENTO
   *
   * @return string
   */
  public function getFINANZIAMENTO() {
    return $this->FINANZIAMENTO;
  }

  /**
   * Set NUM_CAPITOLO
   *
   * @param string $nUMCAPITOLO
   * @return Row
   */
  public function setNUMCAPITOLO($nUMCAPITOLO) {
    $this->NUM_CAPITOLO = $nUMCAPITOLO;

    return $this;
  }

  /**
   * Get NUM_CAPITOLO
   *
   * @return string
   */
  public function getNUMCAPITOLO() {
    return $this->NUM_CAPITOLO;
  }

  /**
   * Set PAGAMENTI_CASSA
   *
   * @param string $pAGAMENTICASSA
   * @return Row
   */
  public function setPAGAMENTICASSA($pAGAMENTICASSA) {
    $this->PAGAMENTI_CASSA = $pAGAMENTICASSA;

    return $this;
  }

  /**
   * Get PAGAMENTI_CASSA
   *
   * @return string
   */
  public function getPAGAMENTICASSA() {
    return $this->PAGAMENTI_CASSA;
  }

  /**
   * Set PREVIS_FINALE_CASSA
   *
   * @param string $pREVISFINALECASSA
   * @return Row
   */
  public function setPREVISFINALECASSA($pREVISFINALECASSA) {
    $this->PREVIS_FINALE_CASSA = $pREVISFINALECASSA;

    return $this;
  }

  /**
   * Get PREVIS_FINALE_CASSA
   *
   * @return string
   */
  public function getPREVISFINALECASSA() {
    return $this->PREVIS_FINALE_CASSA;
  }

  /**
   * Set PROGETTO
   *
   * @param string $pROGETTO
   * @return Row
   */
  public function setPROGETTO($pROGETTO) {
    $this->PROGETTO = $pROGETTO;

    return $this;
  }

  /**
   * Get PROGETTO
   *
   * @return string
   */
  public function getPROGETTO() {
    return $this->PROGETTO;
  }

  /**
   * Set PROGRAMMA
   *
   * @param string $pROGRAMMA
   * @return Row
   */
  public function setPROGRAMMA($pROGRAMMA) {
    $this->PROGRAMMA = $pROGRAMMA;

    return $this;
  }

  /**
   * Get PROGRAMMA
   *
   * @return string
   */
  public function getPROGRAMMA() {
    return $this->PROGRAMMA;
  }

  /**
   * Set SOMME_DA_RIPORTARE
   *
   * @param string $sOMMEDARIPORTARE
   * @return Row
   */
  public function setSOMMEDARIPORTARE($sOMMEDARIPORTARE) {
    $this->SOMME_DA_RIPORTARE = $sOMMEDARIPORTARE;

    return $this;
  }

  /**
   * Get SOMME_DA_RIPORTARE
   *
   * @return string
   */
  public function getSOMMEDARIPORTARE() {
    return $this->SOMME_DA_RIPORTARE;
  }

  /**
   * Set SOMME_DA_RIPORT_TOTALI
   *
   * @param string $sOMMEDARIPORTTOTALI
   * @return Row
   */
  public function setSOMMEDARIPORTTOTALI($sOMMEDARIPORTTOTALI) {
    $this->SOMME_DA_RIPORT_TOTALI = $sOMMEDARIPORTTOTALI;

    return $this;
  }

  /**
   * Get SOMME_DA_RIPORT_TOTALI
   *
   * @return string
   */
  public function getSOMMEDARIPORTTOTALI() {
    return $this->SOMME_DA_RIPORT_TOTALI;
  }

  /**
   * Set SOMME_IMPEGNATE
   *
   * @param string $sOMMEIMPEGNATE
   * @return Row
   */
  public function setSOMMEIMPEGNATE($sOMMEIMPEGNATE) {
    $this->SOMME_IMPEGNATE = $sOMMEIMPEGNATE;

    return $this;
  }

  /**
   * Get SOMME_IMPEGNATE
   *
   * @return string
   */
  public function getSOMMEIMPEGNATE() {
    return $this->SOMME_IMPEGNATE;
  }

  /**
   * Set SOMME_PAGATE
   *
   * @param string $sOMMEPAGATE
   * @return Row
   */
  public function setSOMMEPAGATE($sOMMEPAGATE) {
    $this->SOMME_PAGATE = $sOMMEPAGATE;

    return $this;
  }

  /**
   * Get SOMME_PAGATE
   *
   * @return string
   */
  public function getSOMMEPAGATE() {
    return $this->SOMME_PAGATE;
  }

  /**
   * Set STANZ_COMPET_IMPEGN_INIZ_ESERC
   *
   * @param string $sTANZCOMPETIMPEGNINIZESERC
   * @return Row
   */
  public function setSTANZCOMPETIMPEGNINIZESERC($sTANZCOMPETIMPEGNINIZESERC) {
    $this->STANZ_COMPET_IMPEGN_INIZ_ESERC = $sTANZCOMPETIMPEGNINIZESERC;

    return $this;
  }

  /**
   * Get STANZ_COMPET_IMPEGN_INIZ_ESERC
   *
   * @return string
   */
  public function getSTANZCOMPETIMPEGNINIZESERC() {
    return $this->STANZ_COMPET_IMPEGN_INIZ_ESERC;
  }

  /**
   * Set TITOLO
   *
   * @param string $tITOLO
   * @return Row
   */
  public function setTITOLO($tITOLO) {
    $this->TITOLO = $tITOLO;

    return $this;
  }

  /**
   * Get TITOLO
   *
   * @return string
   */
  public function getTITOLO() {
    return $this->TITOLO;
  }

  /**
   * Set VOCE_ECO
   *
   * @param string $vOCEECO
   * @return Row
   */
  public function setVOCEECO($vOCEECO) {
    $this->VOCE_ECO = $vOCEECO;

    return $this;
  }

  /**
   * Get VOCE_ECO
   *
   * @return string
   */
  public function getVOCEECO() {
    return $this->VOCE_ECO;
  }

    /**
     * Set CAPITOLO_ORIGINE
     *
     * @param string $cAPITOLOORIGINE
     * @return Row
     */
    public function setCAPITOLOORIGINE($cAPITOLOORIGINE)
    {
        $this->CAPITOLO_ORIGINE = $cAPITOLOORIGINE;
    
        return $this;
    }

    /**
     * Get CAPITOLO_ORIGINE
     *
     * @return string 
     */
    public function getCAPITOLOORIGINE()
    {
        return $this->CAPITOLO_ORIGINE;
    }
}