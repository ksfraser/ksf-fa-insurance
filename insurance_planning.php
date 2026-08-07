<?php
/**
 * Insurance planning admin page (FrontAccounting) — ksf_fa_insurance.
 *
 * Entry point rendered by the FA menu hook. Loads a client's insurance plan and
 * displays needs, valuation, and comparison results from Ksfraser\Insurance.
 *
 * @package Ksfraser\FA\Insurance
 */

namespace Ksfraser\FA\Insurance;

use Ksfraser\Insurance\InsuranceNeedsCalculator;
use Ksfraser\ModulesCommon\CalculationContext;

// Standalone page renderer (called by FA after bootstrap).
function insurance_planning_page(): void
{
    $debtor_no = (int) ( $_REQUEST['debtor_no'] ?? 0 );
    echo '<h2>Insurance Planning</h2>';
    echo '<p>', htmlentities( render_insurance_page( $debtor_no ) ), '</p>';
}
