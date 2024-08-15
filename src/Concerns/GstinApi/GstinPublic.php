<?php

namespace Mrhitss\Gstin\Concerns\GstinApi;

trait GstinPublic
{
    /**
     * Search taxpayer by gstin
     * 
     * @param string $action
     * 
     * @param string $gstin
     * 
     * @throws \Throwable
     * 
     * @return mixed
     */
    public function searchTaxpayer(string $gstin, string $action = 'TP')
    {
        $this->apiEndPoint = "v0.2/search?action={$action}&gstin={$gstin}";
        $this->verb = 'get';
        return $this->sendRequest();
    }

    /**
     * Get all Gstins by PAN
     * 
     * @param string $pan
     * 
     * @param string $action
     * 
     * @throws \Throwable
     * 
     * @return mixed
     */
    public function panToGstin(string $pan, string $action = 'TPPAN')
    {
        $this->apiEndPoint = "v1.0/fip/searchbypan?action={$action}&gstin={$pan}";
        $this->verb = 'get';
        return $this->sendRequest();
    }

    /**
     * Verfication of GST Number
     * 
     * @param string $gstin
     * 
     * @param string $action
     * 
     * @throws \Throwable
     * 
     * @return mixed
     */
    public function verifyGstin(string $gstin, string $action = 'TP')
    {
        $this->apiEndPoint = "v1.0/tpstatus?action={$action}&gstin={$gstin}";
        $this->verb = 'get';
        return $this->sendRequest();
    }

    /**
     * Verfication of Updated GST Number
     * 
     * @param string $gstin
     * 
     * @param string $action
     * 
     * @throws \Throwable
     * 
     * @return mixed
     */
    public function verifyUpdatedGstin(string $gstin, string $action = 'TP')
    {
        $this->apiEndPoint = "v1.0/tpaddtlstatus?action={$action}&gstin={$gstin}";
        $this->verb = 'get';
        return $this->sendRequest();
    }

    /**
     * Search IRN Details by IRN
     * 
     * @param string $irn
     * 
     * @throws \Throwable
     * 
     * @return mixed
     */
    public function searchIrnDetails(string $irn)
    {
        $this->apiEndPoint = "v1.0/irn/search?irn={$irn}";
        $this->verb = 'get';
        return $this->sendRequest();
    }

    /**
     * Get Taxpayer allowed permissions for API
     * 
     * @param string $gstin
     * 
     * @throws \Throwable
     * 
     * @return mixed
     */
    public function getTaxpayerAllowedPermissions(string $gstin)
    {
        $this->apiEndPoint = "v1.0/fip/services?gstin={$gstin}";
        $this->verb = 'get';
        return $this->sendRequest();
    }

    /**
     * Get GSTIN change or update logs
     * 
     * @param string $date
     * 
     * @param int $state_code
     * 
     * @param string $pgnum
     * 
     * @param string $action
     * 
     * @throws \Throwable
     * 
     * @return mixed
     */
    public function getGstinChangeLogs(string $date, int $state_code, string $pgnum, string $action = 'TP')
    {
        $this->apiEndPoint = "v1.0/inclist?action={$action}&&date={$date}&state_cd={$state_code}&pgnum={$pgnum}";
        $this->verb = 'get';
        return $this->sendRequest();
    }

    /**
     * Get Return Preferences details
     * 
     * @param string $gstin
     * 
     * @param string $year_range
     * 
     * @throws \Throwable
     * 
     * @return mixed
     */
    public function gstinReturnPreferences(string $gstin, string $year_range)
    {
        $this->apiEndPoint = "v1.0/returns?gstin={$gstin}&fy={$year_range}";
        $this->verb = 'get';
        return $this->sendRequest();
    }
}