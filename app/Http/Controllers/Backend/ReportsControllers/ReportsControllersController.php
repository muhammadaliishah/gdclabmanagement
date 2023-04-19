<?php

namespace App\Http\Controllers\Backend\ReportsControllers;

use App\Http\Controllers\Controller;
use App\Models\ABOBloodGroup;
use App\Models\BilirubinBioChemistry;
use App\Models\BioChemistryDiagnositc;
use App\Models\BloodCrossMatch;
use App\Models\ClinicalPathology;
use App\Models\CompleteBloodCount;
use App\Models\SemanAnalysis;
use App\Models\SerologicalRapidDiagnostic;
use App\Models\UrinePregnancy;
use App\Models\UrineTest;
use Illuminate\Http\Request;

class ReportsControllersController extends Controller
{
    public function printCompleteBloodCountTest($id)
    {
        $model = CompleteBloodCount::find($id);

        return view('backend.reports.print_complete_blood_count', compact('model'));
    }

    public function printSemanAnalysisPostCoitalTest($id)
    {
        $model = SemanAnalysis::find($id);

        return view('backend.reports.print_seman_analysis_post_coital', compact('model'));
    }

    public function printUrineTest($id)
    {
        $model = UrineTest::find($id);

        return view('backend.reports.print_urine_tests', compact('model'));
    }

    public function printUrinePregnancyTest($id)
    {
        $model = UrinePregnancy::find($id);

        return view('backend.reports.print_urine_pregnancy_test', compact('model'));
    }

    public function printClinicalPathologyTest($id)
    {
        $model = ClinicalPathology::find($id);

        return view('backend.reports.print_clinical_pathology', compact('model'));
    }

    public function printABOBloodGroupTest($id)
    {
        $model = ABOBloodGroup::find($id);

        return view('backend.reports.print_abo_blood_group', compact('model'));
    }

    public function printBilirubinBioChemistryTest($id)
    {
        $model = BilirubinBioChemistry::find($id);

        return view('backend.reports.print_bilirubin_bio_chemistry_test', compact('model'));
    }

    public function printSerologicalRapidDiagnosticTest($id)
    {
        $model = SerologicalRapidDiagnostic::find($id);

        return view('backend.reports.print_serological_rapid_diagnostic', compact('model'));
    }

    public function printBioChemistryDiagnosticTest($id)
    {
        $model = BioChemistryDiagnositc::find($id);

        return view('backend.reports.print_bio_chemistry_diagnostic', compact('model'));
    }

    public function printBloodCrossMatchIssueSlipTest($id)
    {
        $model = BloodCrossMatch::find($id);

        return view('backend.reports.print_blood_cross_match_issue_slip', compact('model'));
    }


}
