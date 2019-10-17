<?php

namespace ReportarEnLineaSimulacion\Client;

use \ReportarEnLineaSimulacion\Client\Configuration;
use \ReportarEnLineaSimulacion\Client\ApiException;
use \ReportarEnLineaSimulacion\Client\ObjectSerializer;

class CargaDeCuentasDePersonasFsicasApiTest extends \PHPUnit_Framework_TestCase
{

    public function setUp()
    {
        $handler = \GuzzleHttp\HandlerStack::create();
        $config = new \ReportarEnLineaSimulacion\Client\Configuration();
        $config->setHost('the_url');

        $client = new \GuzzleHttp\Client(['handler' => $handler, 'verify' => false]);
        $this->apiInstance = new \ReportarEnLineaSimulacion\Client\Api\CargaDeCuentasDePersonasFsicasApi($client,$config);
    }

    public function testReportarEnLineaSimulacion()
    {
        $x_api_key = "your_api_key";

        $requestNombre = new \ReportarEnLineaSimulacion\Client\Model\Nombre();
        $requestNombre->setApellidoPaterno("PATERNO");
        $requestNombre->setApellidoMaterno("MATERNO");
        $requestNombre->setApellidoAdicional(null);
        $requestNombre->setNombres("NOMBRE");
        $requestNombre->setFechaNacimiento("19860627");
        $requestNombre->setRfc("PAPN860627");
        $requestNombre->setCurp("PAPN860627MOCNSB02");
        $requestNombre->setNumeroSeguridadSocial(null);
        $requestNombre->setNacionalidad("MX");
        $requestNombre->setResidencia("1");
        $requestNombre->setNumeroLicenciaConducir(null);
        $requestNombre->setEstadoCivil("S");
        $requestNombre->setSexo("F");
        $requestNombre->setClaveElectorIfe(null);
        $requestNombre->setNumeroDependientes("0");
        $requestNombre->setFechaDefuncion(null);
        $requestNombre->setTipoPersona("PF");
        $requestNombre->setIndicadorDefuncion("1");

        $requestDomicilio = new \ReportarEnLineaSimulacion\Client\Model\Domicilio();
        $requestDomicilio->setDireccion("CONOCIDA S/N");
        $requestDomicilio->setColoniaPoblacion("CONOCIDA");
        $requestDomicilio->setDelegacionMunicipio("ECATEPEC");
        $requestDomicilio->setCiudad("ECATEPEC");
        $requestDomicilio->setEstado("MEX");
        $requestDomicilio->setEstadoExtranjero(null);
        $requestDomicilio->setCp("55010");
        $requestDomicilio->setFechaResidencia(null);
        $requestDomicilio->setNumeroCelular(null);
        $requestDomicilio->setNumeroTelefono(null);
        $requestDomicilio->setExtension(null);
        $requestDomicilio->setFax(null);
        $requestDomicilio->setTipoDomicilio("C");
        $requestDomicilio->setTipoAsentamiento("2");
        $requestDomicilio->setOrigenDomicilio("2");

        $requestEmpleo = new \ReportarEnLineaSimulacion\Client\Model\Empleo();
        $requestEmpleo->setNombreEmpresa("VTA DE TORTILLAS");
        $requestEmpleo->setDireccion("CONOCIDA S/N");
        $requestEmpleo->setColoniaPoblacion("CONOCIDA");
        $requestEmpleo->setDelegacionMunicipio("ECATEPEC");
        $requestEmpleo->setCiudad("ECATEPEC");
        $requestEmpleo->setEstado("MX");
        $requestEmpleo->setCp("55010");
        $requestEmpleo->setNumeroTelefono(null);
        $requestEmpleo->setExtension(null);
        $requestEmpleo->setFax(null);
        $requestEmpleo->setPuesto(null);
        $requestEmpleo->setFechaContratacion(null);
        $requestEmpleo->setClaveMoneda("MX");
        $requestEmpleo->setSalarioMensual("5600");
        $requestEmpleo->setFechaUltimoDiaEmpleo("20180228");
        $requestEmpleo->setFechaVerificacionEmpleo(null);
        $requestEmpleo->setOrigenRazonSocialDomicilio("2");

        $requestCuenta = new \ReportarEnLineaSimulacion\Client\Model\Cuenta();
        $requestCuenta->setClaveActualOtorgante("0000080008");
        $requestCuenta->setNombreOtorgante("CIRCULO DE CREDITO");
        $requestCuenta->setCuentaActual("TCDC100002");
        $requestCuenta->setTipoResponsabilidad("O");
        $requestCuenta->setTipoCuenta("F");
        $requestCuenta->setTipoContrato("BC");
        $requestCuenta->setClaveUnidadMonetaria("MX");
        $requestCuenta->setValorActivoValuacion(null);
        $requestCuenta->setNumeroPagos("17");
        $requestCuenta->setFrecuenciaPagos("S");
        $requestCuenta->setMontoPagar("0");
        $requestCuenta->setFechaAperturaCuenta("20151103");
        $requestCuenta->setFechaUltimoPago("20151201");
        $requestCuenta->setFechaUltimaCompra("20151103");
        $requestCuenta->setFechaCierreCuenta("20160101");
        $requestCuenta->setFechaCorte("20180228");
        $requestCuenta->setGarantia(null);
        $requestCuenta->setCreditoMaximo("10000");
        $requestCuenta->setSaldoActual("0");
        $requestCuenta->setLimiteCredito("0");
        $requestCuenta->setSaldoVencido("0");
        $requestCuenta->setNumeroPagosVencidos("2");
        $requestCuenta->setPagoActual(" V");
        $requestCuenta->setHistoricoPagos(null);
        $requestCuenta->setClavePrevencion("1");
        $requestCuenta->setTotalPagosreportados("0");
        $requestCuenta->setClaveAnteriorOtorgante(null);
        $requestCuenta->setNombreAnteriorOtorgante(null);
        $requestCuenta->setNumeroCuentaAnterior(null);
        $requestCuenta->setFechaPrimerIncumplimiento("");
        $requestCuenta->setSaldoInsoluto(null);
        $requestCuenta->setMontoUltimoPago(null);
        $requestCuenta->setFechaIngresoCarteraVencida(null);
        $requestCuenta->setMontoCorrespondienteIntereses("2");
        $requestCuenta->setFormaPagoActualIntereses("2");
        $requestCuenta->setDiasVencimiento("3");
        $requestCuenta->setPlazoMeses(null);
        $requestCuenta->setMontoCreditoOriginacion(null);
        $requestCuenta->setCorreoElectronicoConsumidor(null);
        $requestCuenta->setEstatusCan("01");
        $requestCuenta->setOrdenPrelacionOrigen("01");
        $requestCuenta->setOrdenPrelacionActual("01");
        $requestCuenta->setFechaAperturaCan("20151001");
        $requestCuenta->setFechaCancelacionCan("null");

        $requestPersona = new \ReportarEnLineaSimulacion\Client\Model\Persona();
        $requestPersona->setNombre($requestNombre);
        $requestPersona->setDomicilio($requestDomicilio);
        $requestPersona->setEmpleo($requestEmpleo);
        $requestPersona->setCuenta($requestCuenta);

        $requestEncabezado = new \ReportarEnLineaSimulacion\Client\Model\Encabezado();
        $requestEncabezado->setNombreOtorgante("OTORGANTE");
        $requestEncabezado->setClaveOtorgante("100000");

        $request = new \ReportarEnLineaSimulacion\Client\Model\CargasPFRegistrarRequest();
        $request->setEncabezado($requestEncabezado);
        $request->setPersona($requestPersona);
        try {
            $result = $this->apiInstance->registrar($x_api_key, $request);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling CargaDeCuentasDePersonasFsicasApi->registrar: ', $e->getMessage(), PHP_EOL;
        }
    }
}