<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Spryker\Zed\Newsletter\Dependency\Facade;

use Generated\Shared\Transfer\LocaleTransfer;
use Generated\Shared\Transfer\TranslationTransfer;

class NewsletterToGlossaryBridge implements NewsletterToGlossaryInterface
{

    /**
     * @var \Spryker\Zed\Glossary\Business\GlossaryFacade
     */
    protected $glossaryFacade;

    /**
     * @param \Spryker\Zed\Glossary\Business\GlossaryFacade $glossaryFacade
     */
    public function __construct($glossaryFacade)
    {
        $this->glossaryFacade = $glossaryFacade;
    }

    /**
     * @param string $keyName
     * @param LocaleTransfer|null $locale
     *
     * @return bool
     */
    public function hasTranslation($keyName, LocaleTransfer $locale = null)
    {
        return $this->glossaryFacade->hasTranslation($keyName, $locale);
    }

    /**
     * @param string $keyName
     * @param LocaleTransfer $locale
     *
     * @return TranslationTransfer
     */
    public function getTranslation($keyName, LocaleTransfer $locale)
    {
        return $this->glossaryFacade->getTranslation($keyName, $locale);
    }

}
