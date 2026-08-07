<?php
/**
 * ksf_fa_insurance — FrontAccounting hooks for insurance planning.
 *
 * Registers the insurance-planning admin page and bridges FA client/debtor data
 * into the Ksfraser\Insurance engines. Calculation logic lives in the
 * ksfraser/ksf_insurance package — this module only renders and bridges.
 *
 * @package Ksfraser\FA\Insurance
 */

namespace Ksfraser\FA\Insurance;

use Ksfraser\Insurance\InsuranceNeedsCalculator;
use Ksfraser\ModulesCommon\CalculationContext;
use Ksfraser\ModulesCommon\CalculationEngineInterface;

// Register the insurance planning menu entry in FA.
function install()
{
    // add_application()/add_module() calls would go here in a real FA install.
    return true;
}

// Render the insurance planning admin page for a client (debtor_no).
function render_insurance_page( int $debtor_no ): string
{
    // Delegate to the business-logic package.
    // $engine = new InsuranceNeedsCalculator();
    // $result = $engine->calculate(new CalculationContext('insurance_needs', $params));
    return sprintf( 'Insurance plan for debtor %d (scaffold).', $debtor_no );
}

// FA extension hook entry point.
function hooks_init(): void
{
    // Hook registration for FA extension points.
}
