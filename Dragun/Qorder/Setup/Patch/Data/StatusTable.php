<?php


namespace Dragun\Qorder\Setup\Patch\Data;



use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\DB\TransactionFactory;
use Dragun\Qorder\Model\StatusFactory;

class StatusTable implements DataPatchInterface
{

    const TABLE_NAME = 'sergg_quickorder_status';
    
    const STATUS_CODE_COL_NAME  = 'status_code';
    const STATUS_LABEL_COL_NAME = 'label';
    const IS_DEFAULT            = 'is_default';
    
    /**
     * @var TransactionFactory
     */
    private $transactionModel;

    /**
     * @var StatusFactory
     */
    private $modelFactory;

    public function __construct(
        TransactionFactory $transactionFactory,
        StatusFactory $statusFactory
    ) {
        $this->transactionModel = $transactionFactory;
        $this->modelFactory     = $statusFactory;
    }

    /**
     * @return array|string[]
     */
    public static function getDependencies()
    {
        return [];
    }

    /**
     * @return array|string[]
     */
    public function getAliases()
    {
        return [];
    }

    /**
     * @return DataPatchInterface|void
     * @throws \Exception
     */
    public function apply()
    {
        $statusData = [
            [
                self::STATUS_CODE_COL_NAME => 'pending',
                self::STATUS_LABEL_COL_NAME => 'Pending',
            ],
            [
                self::STATUS_CODE_COL_NAME => 'approved',
                self::STATUS_LABEL_COL_NAME => 'Approved',
            ],
            [
                self::STATUS_CODE_COL_NAME => 'decline',
                self::STATUS_LABEL_COL_NAME => 'Decline',
            ],
        ];

        $transactionalModel = $this->transactionModel->create();

        foreach ($statusData as $data) {
            $model = $this->modelFactory->create();
            $model->addData($data);
            $transactionalModel->addObject($model);
        }

        $transactionalModel->save();
    }
}
