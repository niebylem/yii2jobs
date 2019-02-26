<?php declare(strict_types = 1);

namespace app\modules\jobs\models;

use yii\base\BaseObject;

class Job extends BaseObject
{
    private $_id;
    private $_created_at;
    private $_date_start;
    private $_date_end;
    private $_admin_name;
    private $_categories;
    private $_positions;
    private $_cities;
    private $_title;
    private $_content;
    private $_url;
    private $_apply_url;

    public static function createFromArray(array $data): self
    {
        $job = new self();
        $job->_id = $data['id'];
        $job->_created_at = strtotime($data['created_at']);
        $job->_date_start = strtotime($data['date_start']);
        $job->_date_end = $data['date_end'] !== null ? strtotime($data['date_end']) : null;
        $job->_admin_name = $data['admin_name'];
        $job->_categories = $data['categories'];
        $job->_positions = $data['positions'];
        $job->_cities = $data['cities'];
        $job->_title = !empty($data['content']['title']) ? $data['content']['title'] : null;
        $job->_content = $data['content']['content'];
        $job->_url = $data['content']['url'];
        $job->_apply_url = $data['content']['apply_url'];

        return $job;
    }

    public function getId(): int
    {
        return $this->_id;
    }

    public function getCreatedAt(): string
    {
        return date('Y-m-d', $this->_created_at);
    }

    public function getDateStart(): string
    {
        return date('Y-m-d', $this->_date_start);
    }

    public function getDateEnd(): string
    {
        return date('Y-m-d', $this->_date_end);
    }

    public function getAdminName(): string
    {
        return $this->_admin_name;
    }

    public function getCategories(): array
    {
        return $this->_categories;
    }

    public function getPositions(): array
    {
        return $this->_positions;
    }

    public function getCities(): array
    {
        return $this->_cities;
    }

    public function getContent(): string
    {
        return $this->_content;
    }

    public function getUrl(): string
    {
        return $this->_url;
    }

    public function getApplyUrl(): string
    {
        return $this->_apply_url;
    }

    public function getTitle(): string
    {
        return $this->_title ?? 'Ogłoszenie bez tytułu';
    }
}
