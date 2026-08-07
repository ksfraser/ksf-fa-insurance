# FR-002-008 FACapture: FA Capture & Display of Insurance Plan

**Related:** BR-002 InsurancePlanning, FR-002-001..FR-002-007

## Description
The FrontAccounting module shall let an advisor open a client's insurance plan, run the
`Ksfraser\Insurance` engines, and display insurance-needs, valuation, and comparison
results inline in the FA client screen.

## Primary actor
Advisor.

## Preconditions
- Client (debtor_no) exists in FA.
- `ksfraser/ksf_insurance` package available.

## Main flow
1. Advisor opens Insurance Planning from the client menu.
2. System loads existing plan and runs the engines.
3. Advisor reviews/edits inputs and re-runs.
4. Results persist against the client record.

## Postconditions
Insurance plan results visible and stored for the client.
