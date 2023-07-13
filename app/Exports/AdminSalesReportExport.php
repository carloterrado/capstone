<?php

namespace App\Exports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;

class AdminSalesReportExport implements FromCollection, WithHeadings, WithCustomStartCell, WithStyles
{
     /**
     * @return \Illuminate\Support\Collection
     */
    protected $reportData;
    protected $monthlySales;
    protected $yearlySales;

    public function __construct(array $reportData, $monthlySales, $yearlySales)
    {
        $this->reportData = $reportData;
        $this->monthlySales = $monthlySales;
        $this->yearlySales = $yearlySales;
    }

    public function collection()
    {
        return new Collection($this->reportData);
    }

    public function headings(): array
    {
        return [
            'Reference',
            'Name',
            'Email',
            'Contact',
            'Address',
            'Car',
            'Plate Number',
            'Driver Option',
            'Driver Fee',
            'Amount',
            'Total',
            'Start Date',
            'End Date',
        ];
    }

    public function startCell(): string
    {
        return 'A1';
    }


    public function styles(Worksheet $sheet)
    {
        // Apply styles to the monthly sales report section
        $sheet->mergeCells('Q1:R1');
        $sheet->setCellValue('Q1', 'Monthly Sales Report');
        $sheet->setCellValue('Q2', 'Month');
        $sheet->setCellValue('R2', 'Sales');

        $monthlySales = $this->monthlySales->toArray();
        $row = 3;
        foreach ($monthlySales as $month => $sales) {
            $sheet->setCellValue('Q' . $row, $month);
            $sheet->setCellValue('R' . $row, $sales);
            $row++;
        }

        // Apply styles to the yearly sales report section
        $sheet->mergeCells('U1:V1');
        $sheet->setCellValue('U1', 'Yearly Sales Report');
        $sheet->setCellValue('U2', 'Year');
        $sheet->setCellValue('V2', 'Sales');

        $yearlySales = $this->yearlySales->toArray();
        $row = 3;
        foreach ($yearlySales as $year => $sales) {
            $sheet->setCellValue('U' . $row, $year);
            $sheet->setCellValue('V' . $row, $sales);
            $row++;
        }

        // Apply styles to the overall table section
        $sheet->getStyle('A1:M1')->applyFromArray([
            'font' => [
                'bold' => true,
            ],
            'alignment' => [
                'horizontal' => Alignment::HORIZONTAL_CENTER,
            ],

        ]);

        $sheet->getStyle('A2:M5')->applyFromArray([
            'alignment' => [
                'horizontal' => Alignment::HORIZONTAL_CENTER,
            ],

        ]);
        $sheet->getStyle('Q1:R2')->applyFromArray([
            'font' => [
                'bold' => true,
            ],
             'alignment' => [
                'horizontal' => Alignment::HORIZONTAL_CENTER,
            ],
        ]);
        $sheet->getStyle('U1:V2')->applyFromArray([
            'font' => [
                'bold' => true,
            ],
             'alignment' => [
                'horizontal' => Alignment::HORIZONTAL_CENTER,
            ],
        ]);

        $sheet->getStyle('I2:K' . ($sheet->getHighestRow()))->getNumberFormat()->setFormatCode('₱ #,##0.00');
        $sheet->getStyle('R3:R' . ($sheet->getHighestRow()))->getNumberFormat()->setFormatCode('₱ #,##0.00');
        $sheet->getStyle('V3:V' . ($sheet->getHighestRow()))->getNumberFormat()->setFormatCode('₱ #,##0.00');

        // Autofit column widths
        foreach ($sheet->getColumnIterator() as $column) {
            $sheet->getColumnDimension($column->getColumnIndex())->setAutoSize(true);
        }
    }

    public function getMonthlySales()
    {
        return $this->monthlySales;
    }

    public function getYearlySales()
    {
        return $this->yearlySales;
    }
}
