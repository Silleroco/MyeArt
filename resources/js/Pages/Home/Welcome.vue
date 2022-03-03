<template>
<div>
    <CoverSection 
      :categories="categories"
    />
    <WorksArtSection 
      :docsLastest="latest_artworks"
      :docsPopulate="popular_artworks"
    />
    <BIOArtistSection  
      :docs="artists"
    />
    <!-- <GalleryReferencesSection 
      :docs="galleries"
    /> -->
    <InfoConvertedSection />
    <ListBenefitsSection />
    <NewsletterSection />
</div>
</template>

<script>

//Layout
import LayoutDefault from '../../Layouts/Default/LayoutDefault'

// Section
import CoverSection from './Sections/CoverSection'
import WorksArtSection from './Sections/WorksArtSection'
import BIOArtistSection from './Sections/BIOArtistSection'
import GalleryReferencesSection from './Sections/GalleryReferencesSection'
import InfoConvertedSection from './Sections/InfoConvertedSection'
import ListBenefitsSection from './Sections/ListBenefitsSection'
import NewsletterSection from './Sections/NewsletterSection'

export default {
  props: [
    'artists',
    'latest_artworks',
    'popular_artworks',
    'galleries',
    'categories'
  ],
  layout: LayoutDefault,

  components: {
    CoverSection,
    WorksArtSection,
    BIOArtistSection,
    GalleryReferencesSection,
    InfoConvertedSection,
    ListBenefitsSection,
    NewsletterSection
  },

  created(){
    console.log('this', this)
  },

  data() {
    return {
    }
  },

  methods: {
  }
}
</script>